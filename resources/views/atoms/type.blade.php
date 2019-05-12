{{-- Typographic Element --}}
@isset($h1)   <h1   @endisset
@isset($h2)   <h2   @endisset
@isset($h3)   <h3   @endisset
@isset($h4)   <h4   @endisset
@isset($h5)   <h5   @endisset
@isset($h6)   <h6   @endisset
@isset($p)    <p    @endisset
@isset($span) <span @endisset

class="

{{--
Tachyons
Font family
@link https://github.com/tachyons-css/tachyons/blob/master/src/_font-family.css--}}
@isset($sansSerif)     sans-serif        @endisset
@isset($serif)             serif             @endisset
@isset($systemSansSerif)   system-sans-serif @endisset
@isset($system_serif)      system-serif      @endisset
@isset($code)              code              @endisset
@isset($courier)           courier           @endisset
@isset($helvetica)         helvetica         @endisset
@isset($avenir)            avenir            @endisset
@isset($athelas)           athelas           @endisset
@isset($georgia)           georgia           @endisset
@isset($times)             times             @endisset
@isset($bodoni)            bodoni            @endisset
@isset($calisto)           calisto           @endisset
@isset($garamond)          garamond          @endisset
@isset($baskerville)       baskerville       @endisset

{{--
Tachyons
Type Scale
@link https://github.com/tachyons-css/tachyons/blob/master/src/_type-scale.css --}}
@isset($f1)   f1                 @endisset
@isset($f2)   f2                 @endisset
@isset($f3)   f3                 @endisset
@isset($f4)   f4                 @endisset
@isset($f5)   f5                 @endisset
@isset($f6)   f6                 @endisset
@isset($fNs)  f{!! $fNs !!}-ns   @endisset
@isset($fM)   f{!! $fM  !!}-m    @endisset
@isset($fL)   f{!! $fL  !!}-l   @endisset">{{--

--}}{!! $slot !!}</
@isset($h1)   h1>   @endisset
@isset($h2)   h2>   @endisset
@isset($h3)   h3>   @endisset
@isset($h4)   h4>   @endisset
@isset($h5)   h5>   @endisset
@isset($h6)   h6>   @endisset
@isset($p)    p>    @endisset
@isset($span) span> @endisset