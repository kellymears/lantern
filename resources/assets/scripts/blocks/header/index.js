import { __ } from '@wordpress/i18n'
import edit from './edit'

export const name = 'lantern/header'

const attributes = {
  align: {
    type: 'string',
    default: 'full',
  },
  heading: {
    type: 'string',
  },
  mediaID: {
    type: 'number',
  },
  mediaURL: {
    type: 'string',
  },
}

const supports = {
  align: ['full'],
}

export const options = {
  title: __('Header', 'lantern'),
  description: __('Header banner', 'lantern'),
  category: 'common',
  icon: 'wordpress',
  attributes,
  supports,
  edit,
  save: () => { return null },
}
