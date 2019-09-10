<footer class="footer main-footer">
  <div class="content">
    <div class="">
      <img src="{{asset('images/w-logo.png')}}" alt="bybu.cc" class="foot-logo">
    </div>

    <div class="social-icons-foot">
      <li>
        <a href="https://www.facebook.com/bybu.cc" target="_blank">
          <img src="{{asset('images/icons/facebook.png')}}">
        </a>
      </li>
      <li>
        <a href="https://twitter.com/Bybu_cc" target="_blank">
          <img src="{{asset('images/icons/twitter.png')}}">
        </a>
      </li>
    </div>
    <div class="a-links-footer ">
      <li><a href="{{url('/about')}}">About</a></li>
      <li><a href="{{route('contact')}}">Contact</a></li>
      <li><a href="{{url('/terms')}}">Terms</a></li>
      <li><a href="{{url('/guideline')}}">Guidelines</a></li>
      <li><a href="{{url('/privacy')}}">Privacy</a></li>
      <li><a href="{{route('showcase.dash')}}">Showcase</a></li>
    </div>
    <p class="foot-p">Handcrafted by <a href="https://github.com/VimalBharti">me</a> &copy; bybu.cc</p>
  </div>
</footer>
