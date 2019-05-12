import { __ } from '@wordpress/i18n'
import { Component } from '@wordpress/element'
import { RichText, MediaUpload } from '@wordpress/editor'
import { Button } from '@wordpress/components'

import header from './styled.module.css'
import ui from './../components/styled/ui.module.css'

class Edit extends Component {
  constructor() {
    super(...arguments)

    this.onSelectMedia = this.onSelectMedia.bind(this)
    this.onChangeHeading = this.onChangeHeading.bind(this)
    this.onRemoveMedia = this.onRemoveMedia.bind(this)
  }

  onChangeHeading(value) {
    this.props.setAttributes({heading: value})
  }

  onSelectMedia(media) {
    this.props.setAttributes({
      mediaURL: media.url,
      mediaID: media.id
    })
  }

  onRemoveMedia() {
    this.props.setAttributes({
      mediaURL: '',
      mediaID: null,
    })
  }

  bg(URL) {
    return { backgroundImage: `url(${URL})` }
  }

  showWhen(condition, showClass, hideClass) {
    return condition ? showClass : hideClass
  }

  render() {
    const {
      attributes,
      className,
      isSelected
    } = this.props

    const {
      mediaID,
      mediaURL,
      heading,
    } = attributes

    return (
      <div className={className}>
        <div className={header.header} style={mediaURL && this.bg(mediaURL)}>
          <div className={header.header__overlay}>
            <div className={header.header__container}>
              <RichText
                tagName="div"
                className={header.header__input}
                value={heading}
                placeholder={__('Heading', 'sage')}
                onChange={this.onChangeHeading} />
            </div>
          </div>
        </div>
        <MediaUpload
          onSelect={this.onSelectMedia}
          onChange={this.onSelectMedia}
          value={mediaID}
          render={({ open }) => (
            <div className={this.showWhen(isSelected, ui.button__container, ui.button__container__hidden) }>
              <Button className={!mediaID ? ui.button : ui.button__modify} onClick={open}>
                {!mediaID ? __('Upload background', 'tiny-pixel') : __('Swap background', 'tiny-pixel')}
              </Button>
              {mediaID && (
                <Button className={ui.button__remove} onClick={this.onRemoveMedia}>
                  {__('Remove background', 'tiny-pixel')}
                </Button>
              )}
            </div>
          )} />
      </div>
    )
  }
}

export default Edit
