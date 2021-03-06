@extends('master')

@section('content')
<div class="ui main container">

	<div class="ui three column center aligned grid">

		<div class="two wide column">
			<button class="ui large blue button" id="howtoprevious">Previous</button>
		</div>

		<div class="twelve wide column">
			<div class="ui shape">
				<div class="sides">
					<div class="active side">
						<p>၁။ မဲရုံသည် မနက် ၆ နာရီမှ ညနေ ၄ နာရီ အထိ မဲပေးနိုင်ရန် ဖွင့်လှစ်ထားရှိသည်။</p><br />
						<img src="{{ asset('images/howto/1.png') }}" class="ui huge rounded image">
					</div>

					<div class="side">
						<p>၁။ မဲရုံသည် မနက် ၆ နာရီမှ ညနေ ၄ နာရီ အထိ မဲပေးနိုင်ရန် ဖွင့်လှစ်ထားရှိသည်။</p><br />
						<img src="{{ asset('images/howto/1-2.png') }}" class="ui huge rounded image">
					</div>

					<div class="side">
						<p>၂။ မဲရုံကိုသွားလျှင် မိမိမည်သူမည်ဝါ ဖြစ်ကြောင်း သိရှိရန် မှတ်ပုံတင် ယူဆောင်သွားရမည်။</p><br />
						<img src="{{ asset('images/howto/2.png') }}" class="ui huge rounded image">
					</div>

					<div class="side">
						<p>၃။ မဲရုံရောက်လျှင် မဲစာရင်းတွေ မိမိနာမည်ပါမပါစစ်ဆေးရမည်။</p><br />
						<img src="{{ asset('images/howto/3.png') }}" class="ui huge rounded image">
					</div>

					<div class="side">
						<p>၃။ မဲရုံရောက်လျှင် မဲစာရင်းတွေ မိမိနာမည်ပါမပါစစ်ဆေးရမည်။</p><br />
						<img src="{{ asset('images/howto/3-1.png') }}" class="ui huge rounded image">
					</div>			

					<div class="side">
						<p>၄။ မဲပေးပုံ အဆင်.ဆင်.ကို သိရှိရန် မဲရုံအပြင်က Vinyl poster များကိုလေ.လာရန်လိုအပ်သည်။</p><br />
						<img src="{{ asset('images/howto/4.png') }}" class="ui huge rounded image">
					</div>			    

					<div class="side">
						<p>၅။ မဲရုံတွင်း မဲရုံမှူး ခွင်.ပြုချက်မရဘဲ ကင်မရာ နဲ. ဖုန်းပြောခြင်း မပြုရ ။</p><br />
						<img src="{{ asset('images/howto/5.png') }}" class="ui huge rounded image">
					</div>

					<div class="side">
						<p>၆။ မဲရုံ အတွင်းတာဝန်ရှိသူများကို မဲရုံအပြင်ရှိ Poster များတွေ ဖော်ပြထားသည်။</p><br />
						<img src="{{ asset('images/howto/6.png') }}" class="ui huge rounded image">
					</div>			    

					<div class="side">
						<p>၇။ ခိုင်လုံမဲ နှင်. ပယ်မဲ အကြောင်းကို မဲရုံအပြင်ရှိ Poster များတွေ. ဖော်ပြထားသည်။</p><br />
						<img src="{{ asset('images/howto/7.png') }}" class="ui huge rounded image">
					</div>

					<div class="side">
						<p>၈။ မဲရုံအတွင်းဝင်ရောက်ရန် လူတန်းစီပြီး ဝင်ရောက်ရမည် ။</p><br />
						<img src="{{ asset('images/howto/8.png') }}" class="ui huge rounded image">
					</div>			    

					<div class="side">
						<p>၉။ လူတန်း ကြီးကြပ် သူက သင်.လက်ချောင်းမှာ မှင်သုတ်ထားတာ ရှိမရှိစစ်ဆေးပြီးမှ မဲရုံအတွင်း ဝင်ခွင်.ပြု မည်။</p><br />
						<img src="{{ asset('images/howto/9.png') }}" class="ui huge rounded image">
					</div>

					<div class="side">
						<p>၁၀။ မဲရုံအတွင်း တွင် နမူနာ မဲလက်မှတ်တွင် အစမ်း တံဆိပ်တုံး နှိပ် ကြည်.ရန် စီစဉ် ပေးထားသည်။</p><br />
						<img src="{{ asset('images/howto/10.png') }}" class="ui huge rounded image">
					</div>		

					<div class="side">
						<p>၁၀။ မဲရုံအတွင်း တွင် နမူနာ မဲလက်မှတ်တွင် အစမ်း တံဆိပ်တုံး နှိပ် ကြည်.ရန် စီစဉ် ပေးထားသည်။</p><br />
						<img src="{{ asset('images/howto/10-1.png') }}" class="ui huge rounded image">
					</div>	

					<div class="side">
						<p>၁၀။ မဲရုံအတွင်း တွင် နမူနာ မဲလက်မှတ်တွင် အစမ်း တံဆိပ်တုံး နှိပ် ကြည်.ရန် စီစဉ် ပေးထားသည်။</p><br />
						<img src="{{ asset('images/howto/10-2.png') }}" class="ui huge rounded image">
					</div>	

				</div>
			</div>			
		</div>

		<div class="two wide column">
			<button class="ui large green button" id="howtonext">Next</button>
		</div>
	</div>	

</div>

<script type="text/javascript">
	$('#howtonext').click(function(){
		$('.shape').shape('flip right');
	});

	$('#howtoback').click(function(){
		$('.shape').shape('flip left');
	});	
</script>
@stop