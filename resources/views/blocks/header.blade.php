<div class="header">
  <div class="header header__background">
    <div class="header header__overlay">
      <div class="header__container">
        <div class="header__heading">{!! $block->attributes->heading !!}</div>
      </div>
    </div>
  </div>
</div>

@if(isset($block->attributes->mediaURL))
  @push('css')
    .header__background {
      background-image: url({!! $block->attributes->mediaURL !!});
    }
  @endpush
@endif