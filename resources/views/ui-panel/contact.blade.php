@extends('layouts.ui-app')
@section('title', 'နှင်းဆီ🌹')
@section('contact-active','navbar-active')
@section('content')
<div class="blank-space"></div>
<!--/.header-->

<section class="sec-contact blog-sec">
  <div class="inner">
    <div class="contact">
      <h2 class="title-desc animate__animated animate__fadeInDown">အခက်အခဲများ အတွက် စိတ်ရှုပ်မခံပါနဲ့
        အတူတူပူးပေါင်းအဖြေရှာဖို့ အမြန်ဆုံးဆက်သွယ်လိုက်ပါ။</h2>
      <div class="clearfix">
        <div class="contact-info">
          <h3 class="contact-ttl">ဆက်သွယ်ရန် လိပ်စာ</h3>
          <ul class="info-item">
            <li><a href="#"><span class="contact-icon phone"></span>၀၉-၇၉၇၇၇၇၂၂၂ <br> ၀၉-၉၉၉၉၉၉၁၁၁</a></li>
            <li><a href="#"><span class="contact-icon email"></span>admin@gmail.com</a></li>
            <li><a href="#"><span class="contact-icon home"></span>အမှတ်(၈၈/၉၀)၊ ၄လွှာ၊ ၅၁လမ်း၊ <br>အလယ်ဘလောက်၊
                ပုဇွန်တောင်မြို့နယ်၊ ရန်ကုန်မြို့။</a></li>
          </ul>
        </div> 
        
        <form method="POST" action="{{ route('contact-form.store') }}" class="contact-form">

          {{ csrf_field() }}
          <h3 class="contact-ttl">ဆက်သွယ်ရန်</h3> 

          @if(Session::has('success'))
          <div class="text-success">
            {{ Session::get('success') }}
            @php
            Session::forget('success');
            @endphp
          </div>
          @endif     

          <div>
            <input type="text" id="name" name="name" placeholder="အမည်ဖြည့်ပါ" value="{{ old('name') }}" require><br>
            @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
          </div>

          <div>
            <input type="email" id="email" name="email" placeholder="အီးမေးလ်ဖြည့်ပါ" value="{{ old('email') }}" require><br>
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
          </div>

          <div>
          <input type="phone" max="11" id="phone" name="phone" placeholder="ဖုန်းနံပါတ်ဖြည့်ပါ" value="{{ old('phone') }}" require><br>
            @if ($errors->has('phone'))
            <span class="text-danger">{{ $errors->first('phone') }}</span>
            @endif
          </div>

          <div>
            <input type="text" name="subject" placeholder="အကြောင်းအရာဖြည့်ပါ" value="{{ old('subject') }}" require><br>
            @if ($errors->has('subject'))
            <span class="text-danger">{{ $errors->first('subject') }}</span>
            @endif
          </div>

          <div>
          <textarea name="message" placeholder="အသေးစိတ်ရေးရန်" maxlength="90" require>{{ old('message') }}</textarea><br>
            @if ($errors->has('message'))
            <span class="text-danger">{{ $errors->first('message') }}</span>
            @endif
          </div>

          <button class="btn">မက်ဆေ့ပို့မည်</button>
        </form>
      </div>
      <div class="map-add">
        <iframe class="map-link" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.191615738032!2d96.15472821434588!3d16.81684757343599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ecab9edba127%3A0x7f5dbf4228534185!2sPearl%20Condo%2C%20Corner%20of%20Kabar%20Aye%20Pagoda%20Road%20and%20Sayar%20San%20Road%2C%20Yangon%2C%20Myanmar%20(Burma)!5e0!3m2!1sen!2ssg!4v1642331929782!5m2!1sen!2ssg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>

  <footer id="footer"></footer>
</section>
<!--/sec-contact-->

@endsection