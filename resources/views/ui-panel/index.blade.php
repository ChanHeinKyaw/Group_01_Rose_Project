@extends('layouts.ui-app')
@section('title', 'Rose | Home Page')
@section('content')
  @if (session('status'))
    <div class="alert">
      {{ session('status') }}
    </div>
  @endif
  <div class="big-row">
    <img src="img/big-img.png" alt="" class="big-img">
    <div class="big-quote">
      <h2>" သင် အကူအညီမဲ့နေတယ်လို့ ခံစားရလျှင် တစ်စုံတစ်ဦးအား ကူညီလိုက်ပါ။ "</h2>
    </div>
  </div>

  <div class="blog-sec">

    <div class="article-div inner-container">
      <h3>သုတစာစဉ်များ</h3>
      <div class="grid-div">
        <article class="article">
          <h4>Article Title</h4>
          <img src="img/article.jpg" alt="Blog Image" class="article-img">
          <p>MiMi Aung ( Burmese : မိမိအောင် , Burmese pronunciation : [mḭ mḭ àʊɰ̃] ; born 1968) is a Burmese-American
            engineer and a project manager at NASA 's Jet Propulsion Laboratory (JPL). သူမသည် Mars Helicopter Ingenuity
            တွင် ဦးဆောင်အင်ဂျင်နီယာတစ်ဦး ဖြစ်ပြီး ပထမဆုံး အာကာသယာဉ်ဖြစ်သည်။ [1]

            အောင် သူသည် အသက် ၂ နှစ်အရွယ်တွင် မိသားစု မြန်မာပြည်သို့ ပြန်လာခဲ့သော်လည်း မိဘများ တွေ့ဆုံခဲ့သည့်
            အမေရိကန်ပြည်ထောင်စုတွင် မွေးဖွားခဲ့သည် ။ [2] ငယ်စဉ်က မြန်မာနိုင်ငံနှင့် မလေးရှားတွင် နေထိုင်ပြီးနောက်
            အောင်သည်
            အသက် 16 နှစ်အရွယ်တွင် အမေရိကန်သို့ ပြန်လာပြီး Urbana-Champaign ရှိ University of Illinois တွင်
            အင်ဂျင်နီယာဘာသာရပ်ဖြင့် ဘွဲ့နှင့် မဟာဘွဲ့များ ရရှိခဲ့သည်။ 1990 တွင်သူမသည် JPL သို့ဝင်ရောက်ခဲ့သည်။ [3]

            ဖေဖော်ဝါရီ 18 ရက် 2021 တွင် Ingenuity သည် Mars ပေါ်သို့ ရောက်ရှိခဲ့ပြီး April 19 တွင် ၎င်း၏ပထမဆုံး 39
            စက္ကန့်ပျံသန်းခဲ့သည်။ [4] Aung က “မယုံနိုင်လောက်စရာ အခိုက်အတန့်ပါပဲ” နဲ့ “ဒီမနက် ငါတို့အိပ်မက်တွေ
            တကယ်ဖြစ်လာခဲ့တယ်” လို့ ပြောပါတယ်။ အဆိုပါ ပျံသန်းမှု ကို ရဟတ်ယာဉ်ဖြင့် အင်္ဂါဂြိုလ်သို့ သယ်ဆောင်သွားသည့်
            Wright
            Brothers လေယာဉ် ၏ 1903 ခုနှစ်တွင် ပထမဆုံးပျံသန်းသည့် လေယာဉ်နှင့် နှိုင်းယှဉ်ထားသည် ။ [5]</p>

          <button>ဆက်ဖတ်ရန်</button>
        </article>

        <article class="article">
          <h4>Article Title</h4>
          <img src="img/article.jpg" alt="Blog Image" class="article-img">
          <p>MiMi Aung ( Burmese : မိမိအောင် , Burmese pronunciation : [mḭ mḭ àʊɰ̃] ; born 1968) is a Burmese-American
            engineer and a project manager at NASA 's Jet Propulsion Laboratory (JPL). သူမသည် Mars Helicopter Ingenuity
            တွင် ဦးဆောင်အင်ဂျင်နီယာတစ်ဦး ဖြစ်ပြီး ပထမဆုံး အာကာသယာဉ်ဖြစ်သည်။ [1]

            အောင် သူသည် အသက် ၂ နှစ်အရွယ်တွင် မိသားစု မြန်မာပြည်သို့ ပြန်လာခဲ့သော်လည်း မိဘများ တွေ့ဆုံခဲ့သည့်
            အမေရိကန်ပြည်ထောင်စုတွင် မွေးဖွားခဲ့သည် ။ [2] ငယ်စဉ်က မြန်မာနိုင်ငံနှင့် မလေးရှားတွင် နေထိုင်ပြီးနောက်
            အောင်သည်
            အသက် 16 နှစ်အရွယ်တွင် အမေရိကန်သို့ ပြန်လာပြီး Urbana-Champaign ရှိ University of Illinois တွင်
            အင်ဂျင်နီယာဘာသာရပ်ဖြင့် ဘွဲ့နှင့် မဟာဘွဲ့များ ရရှိခဲ့သည်။ 1990 တွင်သူမသည် JPL သို့ဝင်ရောက်ခဲ့သည်။ [3]

            ဖေဖော်ဝါရီ 18 ရက် 2021 တွင် Ingenuity သည် Mars ပေါ်သို့ ရောက်ရှိခဲ့ပြီး April 19 တွင် ၎င်း၏ပထမဆုံး 39
            စက္ကန့်ပျံသန်းခဲ့သည်။ [4] Aung က “မယုံနိုင်လောက်စရာ အခိုက်အတန့်ပါပဲ” နဲ့ “ဒီမနက် ငါတို့အိပ်မက်တွေ
            တကယ်ဖြစ်လာခဲ့တယ်” လို့ ပြောပါတယ်။ အဆိုပါ ပျံသန်းမှု ကို ရဟတ်ယာဉ်ဖြင့် အင်္ဂါဂြိုလ်သို့ သယ်ဆောင်သွားသည့်
            Wright
            Brothers လေယာဉ် ၏ 1903 ခုနှစ်တွင် ပထမဆုံးပျံသန်းသည့် လေယာဉ်နှင့် နှိုင်းယှဉ်ထားသည် ။ [5]</p>

          <button>ဆက်ဖတ်ရန်</button>
        </article>

        <article class="article">
          <h4>Article Title</h4>
          <img src="img/article.jpg" alt="Blog Image" class="article-img">
          <p>MiMi Aung ( Burmese : မိမိအောင် , Burmese pronunciation : [mḭ mḭ àʊɰ̃] ; born 1968) is a Burmese-American
            engineer and a project manager at NASA 's Jet Propulsion Laboratory (JPL). သူမသည် Mars Helicopter Ingenuity
            တွင် ဦးဆောင်အင်ဂျင်နီယာတစ်ဦး ဖြစ်ပြီး ပထမဆုံး အာကာသယာဉ်ဖြစ်သည်။ [1]

            အောင် သူသည် အသက် ၂ နှစ်အရွယ်တွင် မိသားစု မြန်မာပြည်သို့ ပြန်လာခဲ့သော်လည်း မိဘများ တွေ့ဆုံခဲ့သည့်
            အမေရိကန်ပြည်ထောင်စုတွင် မွေးဖွားခဲ့သည် ။ [2] ငယ်စဉ်က မြန်မာနိုင်ငံနှင့် မလေးရှားတွင် နေထိုင်ပြီးနောက်
            အောင်သည်
            အသက် 16 နှစ်အရွယ်တွင် အမေရိကန်သို့ ပြန်လာပြီး Urbana-Champaign ရှိ University of Illinois တွင်
            အင်ဂျင်နီယာဘာသာရပ်ဖြင့် ဘွဲ့နှင့် မဟာဘွဲ့များ ရရှိခဲ့သည်။ 1990 တွင်သူမသည် JPL သို့ဝင်ရောက်ခဲ့သည်။ [3]

            ဖေဖော်ဝါရီ 18 ရက် 2021 တွင် Ingenuity သည် Mars ပေါ်သို့ ရောက်ရှိခဲ့ပြီး April 19 တွင် ၎င်း၏ပထမဆုံး 39
            စက္ကန့်ပျံသန်းခဲ့သည်။ [4] Aung က “မယုံနိုင်လောက်စရာ အခိုက်အတန့်ပါပဲ” နဲ့ “ဒီမနက် ငါတို့အိပ်မက်တွေ
            တကယ်ဖြစ်လာခဲ့တယ်” လို့ ပြောပါတယ်။ အဆိုပါ ပျံသန်းမှု ကို ရဟတ်ယာဉ်ဖြင့် အင်္ဂါဂြိုလ်သို့ သယ်ဆောင်သွားသည့်
            Wright
            Brothers လေယာဉ် ၏ 1903 ခုနှစ်တွင် ပထမဆုံးပျံသန်းသည့် လေယာဉ်နှင့် နှိုင်းယှဉ်ထားသည် ။ [5]</p>

          <button>ဆက်ဖတ်ရန်</button>
        </article>

        <article class="article">
          <h4>Article Title</h4>
          <img src="img/article.jpg" alt="Blog Image" class="article-img">
          <p>MiMi Aung ( Burmese : မိမိအောင် , Burmese pronunciation : [mḭ mḭ àʊɰ̃] ; born 1968) is a Burmese-American
            engineer and a project manager at NASA 's Jet Propulsion Laboratory (JPL). သူမသည် Mars Helicopter Ingenuity
            တွင် ဦးဆောင်အင်ဂျင်နီယာတစ်ဦး ဖြစ်ပြီး ပထမဆုံး အာကာသယာဉ်ဖြစ်သည်။ [1]

            အောင် သူသည် အသက် ၂ နှစ်အရွယ်တွင် မိသားစု မြန်မာပြည်သို့ ပြန်လာခဲ့သော်လည်း မိဘများ တွေ့ဆုံခဲ့သည့်
            အမေရိကန်ပြည်ထောင်စုတွင် မွေးဖွားခဲ့သည် ။ [2] ငယ်စဉ်က မြန်မာနိုင်ငံနှင့် မလေးရှားတွင် နေထိုင်ပြီးနောက်
            အောင်သည်
            အသက် 16 နှစ်အရွယ်တွင် အမေရိကန်သို့ ပြန်လာပြီး Urbana-Champaign ရှိ University of Illinois တွင်
            အင်ဂျင်နီယာဘာသာရပ်ဖြင့် ဘွဲ့နှင့် မဟာဘွဲ့များ ရရှိခဲ့သည်။ 1990 တွင်သူမသည် JPL သို့ဝင်ရောက်ခဲ့သည်။ [3]

            ဖေဖော်ဝါရီ 18 ရက် 2021 တွင် Ingenuity သည် Mars ပေါ်သို့ ရောက်ရှိခဲ့ပြီး April 19 တွင် ၎င်း၏ပထမဆုံး 39
            စက္ကန့်ပျံသန်းခဲ့သည်။ [4] Aung က “မယုံနိုင်လောက်စရာ အခိုက်အတန့်ပါပဲ” နဲ့ “ဒီမနက် ငါတို့အိပ်မက်တွေ
            တကယ်ဖြစ်လာခဲ့တယ်” လို့ ပြောပါတယ်။ အဆိုပါ ပျံသန်းမှု ကို ရဟတ်ယာဉ်ဖြင့် အင်္ဂါဂြိုလ်သို့ သယ်ဆောင်သွားသည့်
            Wright
            Brothers လေယာဉ် ၏ 1903 ခုနှစ်တွင် ပထမဆုံးပျံသန်းသည့် လေယာဉ်နှင့် နှိုင်းယှဉ်ထားသည် ။ [5]</p>

          <button>ဆက်ဖတ်ရန်</button>
        </article>

        <article class="article">
          <h4>Article Title</h4>
          <img src="img/article.jpg" alt="Blog Image" class="article-img">
          <p>MiMi Aung ( Burmese : မိမိအောင် , Burmese pronunciation : [mḭ mḭ àʊɰ̃] ; born 1968) is a Burmese-American
            engineer and a project manager at NASA 's Jet Propulsion Laboratory (JPL). သူမသည် Mars Helicopter Ingenuity
            တွင် ဦးဆောင်အင်ဂျင်နီယာတစ်ဦး ဖြစ်ပြီး ပထမဆုံး အာကာသယာဉ်ဖြစ်သည်။ [1]

            အောင် သူသည် အသက် ၂ နှစ်အရွယ်တွင် မိသားစု မြန်မာပြည်သို့ ပြန်လာခဲ့သော်လည်း မိဘများ တွေ့ဆုံခဲ့သည့်
            အမေရိကန်ပြည်ထောင်စုတွင် မွေးဖွားခဲ့သည် ။ [2] ငယ်စဉ်က မြန်မာနိုင်ငံနှင့် မလေးရှားတွင် နေထိုင်ပြီးနောက်
            အောင်သည်
            အသက် 16 နှစ်အရွယ်တွင် အမေရိကန်သို့ ပြန်လာပြီး Urbana-Champaign ရှိ University of Illinois တွင်
            အင်ဂျင်နီယာဘာသာရပ်ဖြင့် ဘွဲ့နှင့် မဟာဘွဲ့များ ရရှိခဲ့သည်။ 1990 တွင်သူမသည် JPL သို့ဝင်ရောက်ခဲ့သည်။ [3]

            ဖေဖော်ဝါရီ 18 ရက် 2021 တွင် Ingenuity သည် Mars ပေါ်သို့ ရောက်ရှိခဲ့ပြီး April 19 တွင် ၎င်း၏ပထမဆုံး 39
            စက္ကန့်ပျံသန်းခဲ့သည်။ [4] Aung က “မယုံနိုင်လောက်စရာ အခိုက်အတန့်ပါပဲ” နဲ့ “ဒီမနက် ငါတို့အိပ်မက်တွေ
            တကယ်ဖြစ်လာခဲ့တယ်” လို့ ပြောပါတယ်။ အဆိုပါ ပျံသန်းမှု ကို ရဟတ်ယာဉ်ဖြင့် အင်္ဂါဂြိုလ်သို့ သယ်ဆောင်သွားသည့်
            Wright
            Brothers လေယာဉ် ၏ 1903 ခုနှစ်တွင် ပထမဆုံးပျံသန်းသည့် လေယာဉ်နှင့် နှိုင်းယှဉ်ထားသည် ။ [5]</p>

          <button>ဆက်ဖတ်ရန်</button>
        </article>

        <article class="article">
          <h4>Article Title</h4>
          <img src="img/article.jpg" alt="Blog Image" class="article-img">
          <p>MiMi Aung ( Burmese : မိမိအောင် , Burmese pronunciation : [mḭ mḭ àʊɰ̃] ; born 1968) is a Burmese-American
            engineer and a project manager at NASA 's Jet Propulsion Laboratory (JPL). သူမသည် Mars Helicopter Ingenuity
            တွင် ဦးဆောင်အင်ဂျင်နီယာတစ်ဦး ဖြစ်ပြီး ပထမဆုံး အာကာသယာဉ်ဖြစ်သည်။ [1]

            အောင် သူသည် အသက် ၂ နှစ်အရွယ်တွင် မိသားစု မြန်မာပြည်သို့ ပြန်လာခဲ့သော်လည်း မိဘများ တွေ့ဆုံခဲ့သည့်
            အမေရိကန်ပြည်ထောင်စုတွင် မွေးဖွားခဲ့သည် ။ [2] ငယ်စဉ်က မြန်မာနိုင်ငံနှင့် မလေးရှားတွင် နေထိုင်ပြီးနောက်
            အောင်သည်
            အသက် 16 နှစ်အရွယ်တွင် အမေရိကန်သို့ ပြန်လာပြီး Urbana-Champaign ရှိ University of Illinois တွင်
            အင်ဂျင်နီယာဘာသာရပ်ဖြင့် ဘွဲ့နှင့် မဟာဘွဲ့များ ရရှိခဲ့သည်။ 1990 တွင်သူမသည် JPL သို့ဝင်ရောက်ခဲ့သည်။ [3]

            ဖေဖော်ဝါရီ 18 ရက် 2021 တွင် Ingenuity သည် Mars ပေါ်သို့ ရောက်ရှိခဲ့ပြီး April 19 တွင် ၎င်း၏ပထမဆုံး 39
            စက္ကန့်ပျံသန်းခဲ့သည်။ [4] Aung က “မယုံနိုင်လောက်စရာ အခိုက်အတန့်ပါပဲ” နဲ့ “ဒီမနက် ငါတို့အိပ်မက်တွေ
            တကယ်ဖြစ်လာခဲ့တယ်” လို့ ပြောပါတယ်။ အဆိုပါ ပျံသန်းမှု ကို ရဟတ်ယာဉ်ဖြင့် အင်္ဂါဂြိုလ်သို့ သယ်ဆောင်သွားသည့်
            Wright
            Brothers လေယာဉ် ၏ 1903 ခုနှစ်တွင် ပထမဆုံးပျံသန်းသည့် လေယာဉ်နှင့် နှိုင်းယှဉ်ထားသည် ။ [5]</p>

          <button>ဆက်ဖတ်ရန်</button>
        </article>
      </div>

    </div>

    <footer id="footer">
    </footer>
  </div>
@endsection
