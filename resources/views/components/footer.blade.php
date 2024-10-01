<footer class="footer">
  <div class="md-flex md-justify-between">
    <a href="{{ url('/manageFile/pass') }}" class="footer__logo">

      <img src="{{ asset('images/aikon.jpg') }}" width="300" height="75" >
    </a>
    <div class="grid">
      <div>
        <p class="footer__navi-heading">カレンダー</p>
        <ul class="footer__navi">
          <li><a href="{{ url('/calendar') }}">カレンダー</a></li>
          <li><a href="https://calendar.google.com/calendar/u/0/embed?src=kiiteworld.informal@gmail.com&ctz=Asia/Tokyo">スマホ用カレンダー</a></li>
        </ul>
      </div>
      <div>
        <p class="footer__navi-heading">企画ツアー</p>
        <ul class="footer__navi">
          <li><a href="{{ url('/save')}}">企画ツアー</a></li>
          <li><a href="#">定期開催ツアー(仮置)</a></li>
        </ul>
      </div>
      <div>
        <p class="footer__navi-heading">その他</p>
        <ul class="footer__navi">
          <li><a href="{{ url('/discription')}}">サイト概要</a></li>
          <li><a href="https://x.com/P1105q_">お問い合わせ( X のDMまで)</a></li>
          {{-- <li><a href="#">借りたもの？</a></li> --}}
          {{-- ↑木京さんや産総研など --}}
        </ul>
      </div>
    </div>
  </div>
  <hr />
  <p class="copyright">@ 2023 <a href="###">WKKW.</a> All Rights Wakuwaki.
  </p>
</footer>