{{-- Typographic Container --}}
<div class="
{{--
Tachyons
Font family
@link https://github.com/tachyons-css/tachyons/blob/master/src/_font-family.css--}}
@isset($sansSerif)         sans-serif        @endisset
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
@isset($fL)   f{!! $fL  !!}-l    @endisset

{{--
Tachyons
Type Scale
@link https://github.com/tachyons-css/tachyons/blob/master/src/_font-weight.css --}}
@isset($normal) normal @endisset
@isset($b)      b      @endisset
@isset($fw1)    fw1    @endisset
@isset($fw2)    fw2    @endisset
@isset($fw3)    fw3    @endisset
@isset($fw4)    fw4    @endisset
@isset($fw5)    fw5    @endisset
@isset($fw6)    fw6    @endisset
@isset($fw7)    fw7    @endisset
@isset($fw8)    fw8    @endisset
@isset($fw9)    fw9    @endisset

@isset($normalNs) normal-ns @endisset
@isset($bNs)      b-ns      @endisset
@isset($fw1Ns)    fw1-ns    @endisset
@isset($fw2Ns)    fw2-ns    @endisset
@isset($fw3Ns)    fw3-ns    @endisset
@isset($fw4Ns)    fw4-ns    @endisset
@isset($fw5Ns)    fw5-ns    @endisset
@isset($fw6Ns)    fw6-ns    @endisset
@isset($fw7Ns)    fw7-ns    @endisset
@isset($fw8Ns)    fw8-ns    @endisset
@isset($fw9Ns)    fw9-ns    @endisset

@isset($normalM) normal-m @endisset
@isset($bM)      b-m      @endisset
@isset($fw1M)    fw1-m    @endisset
@isset($fw2M)    fw2-m    @endisset
@isset($fw3M)    fw3-m    @endisset
@isset($fw4M)    fw4-m    @endisset
@isset($fw5M)    fw5-m    @endisset
@isset($fw6M)    fw6-m    @endisset
@isset($fw7M)    fw7-m    @endisset
@isset($fw8M)    fw8-m    @endisset
@isset($fw9M)    fw9-m    @endisset

@isset($normalL) normal-l @endisset
@isset($bL)      b-l      @endisset
@isset($fw1L)    fw1-l    @endisset
@isset($fw2L)    fw2-l    @endisset
@isset($fw3L)    fw3-l    @endisset
@isset($fw4L)    fw4-l    @endisset
@isset($fw5L)    fw5-l    @endisset
@isset($fw6L)    fw6-l    @endisset
@isset($fw7L)    fw7-l    @endisset
@isset($fw8L)    fw8-l    @endisset
@isset($fw9L)    fw9-l    @endisset">{!! $slot ?: $inner !!}</div>