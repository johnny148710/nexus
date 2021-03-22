<?php /*

    <div id="visualizations-player">
      <div class="top-container">
        <img class="now-playing-album-art" id="large-now-playing-album-art" data-amplitude-song-info="cover_art_url"/>
        <div class="amplitude-visualization" id="large-visualization">

        </div>
        <div class="visualization-toggle visualization-on"></div>
        <div class="amplitude-shuffle"></div>
        <div class="amplitude-repeat"></div>
      </div>

      <div class="meta-data-container">
        <span class="now-playing-name" data-amplitude-song-info="name"></span>
        <span class="now-playing-artist-album">
          <span class="now-playing-artist" data-amplitude-song-info="artist"></span> - <span class="now-playing-album" data-amplitude-song-info="album"></span>
        </span>
      </div>

      <div class="amplitude-wave-form">

      </div>
      <input type="range" class="amplitude-song-slider" id="global-large-song-slider"/>

      <div>
        <span class="amplitude-current-time"></span>

        <span class="amplitude-time-remaining"></span>
      </div>

      <div class="control-container">
        <div class="amplitude-prev">

        </div>

        <div class="amplitude-play-pause amplitude-paused">

        </div>

        <div class="amplitude-next">

        </div>
      </div>

      <div class="song-navigation">
        <input type="range" class="amplitude-song-slider"/>
      </div>

      <div class="arrow-up">
        <img src="https://521dimensions.com/img/open-source/amplitudejs/examples/visualizations/arrow-up.svg" class="arrow-up-icon"/>
      </div>

      <div id="visualizations-player-playlist">
        <div class="top-arrow">
          <img src="https://521dimensions.com/img/open-source/amplitudejs/examples/visualizations/arrow-down.svg" class="arrow-down-icon"/>
        </div>

        <div class="top">
          <span class="playlist-title">Songs</span>
          <div class="amplitude-repeat">

          </div>
          <div class="amplitude-shuffle">

          </div>
        </div>

        <div class="songs-container">
          <div class="song amplitude-song-container amplitude-play-pause"  data-amplitude-song-index="0">
            <span class="song-position">01</span>
            <img class="song-album-art" data-amplitude-song-info="cover_art_url" data-amplitude-song-index="0"/>
            <div class="song-meta-data-container">
              <span class="song-name" data-amplitude-song-info="name" data-amplitude-song-index="0"></span>
              <span class="song-artist" data-amplitude-song-info="artist" data-amplitude-song-index="0"></span>
            </div>
          </div>
          <div class="song amplitude-song-container amplitude-play-pause"  data-amplitude-song-index="1">
            <span class="song-position">02</span>
            <img class="song-album-art" data-amplitude-song-info="cover_art_url" data-amplitude-song-index="1"/>
            <div class="song-meta-data-container">
              <span class="song-name" data-amplitude-song-info="name" data-amplitude-song-index="1"></span>
              <span class="song-artist" data-amplitude-song-info="artist" data-amplitude-song-index="1"></span>
            </div>
          </div>
          <!-- <div class="song amplitude-song-container amplitude-play-pause"  data-amplitude-song-index="2">
            <span class="song-position">03</span>
            <img class="song-album-art" data-amplitude-song-info="cover_art_url" data-amplitude-song-index="2"/>
            <div class="song-meta-data-container">
              <span class="song-name" data-amplitude-song-info="name" data-amplitude-song-index="2"></span>
              <span class="song-artist" data-amplitude-song-info="artist" data-amplitude-song-index="2"></span>
            </div>
          </div>
          <div class="song amplitude-song-container amplitude-play-pause"  data-amplitude-song-index="3">
            <span class="song-position">04</span>
            <img class="song-album-art" data-amplitude-song-info="cover_art_url" data-amplitude-song-index="3"/>
            <div class="song-meta-data-container">
              <span class="song-name" data-amplitude-song-info="name" data-amplitude-song-index="3"></span>
              <span class="song-artist" data-amplitude-song-info="artist" data-amplitude-song-index="3"></span>
            </div>
          </div>
          <div class="song amplitude-song-container amplitude-play-pause"  data-amplitude-song-index="4">
            <span class="song-position">05</span>
            <img class="song-album-art" data-amplitude-song-info="cover_art_url" data-amplitude-song-index="4"/>
            <div class="song-meta-data-container">
              <span class="song-name" data-amplitude-song-info="name" data-amplitude-song-index="4"></span>
              <span class="song-artist" data-amplitude-song-info="artist" data-amplitude-song-index="4"></span>
            </div>
          </div>
          <div class="song amplitude-song-container amplitude-play-pause"  data-amplitude-song-index="5">
            <span class="song-position">06</span>
            <img class="song-album-art" data-amplitude-song-info="cover_art_url" data-amplitude-song-index="5"/>
            <div class="song-meta-data-container">
              <span class="song-name" data-amplitude-song-info="name" data-amplitude-song-index="5"></span>
              <span class="song-artist" data-amplitude-song-info="artist" data-amplitude-song-index="5"></span>
            </div>
          </div>
          <div class="song amplitude-song-container amplitude-play-pause"  data-amplitude-song-index="6">
            <span class="song-position">07</span>
            <img class="song-album-art" data-amplitude-song-info="cover_art_url" data-amplitude-song-index="6"/>
            <div class="song-meta-data-container">
              <span class="song-name" data-amplitude-song-info="name" data-amplitude-song-index="6"></span>
              <span class="song-artist" data-amplitude-song-info="artist" data-amplitude-song-index="6"></span>
            </div>
          </div>
          <div class="song amplitude-song-container amplitude-play-pause"  data-amplitude-song-index="7">
            <span class="song-position">08</span>
            <img class="song-album-art" data-amplitude-song-info="cover_art_url" data-amplitude-song-index="7"/>
            <div class="song-meta-data-container">
              <span class="song-name" data-amplitude-song-info="name" data-amplitude-song-index="7"></span>
              <span class="song-artist" data-amplitude-song-info="artist" data-amplitude-song-index="7"></span>
            </div>
          </div>
          <div class="song amplitude-song-container amplitude-play-pause"  data-amplitude-song-index="8">
            <span class="song-position">09</span>
            <img class="song-album-art" data-amplitude-song-info="cover_art_url" data-amplitude-song-index="8"/>
            <div class="song-meta-data-container">
              <span class="song-name" data-amplitude-song-info="name" data-amplitude-song-index="8"></span>
              <span class="song-artist" data-amplitude-song-info="artist" data-amplitude-song-index="8"></span>
            </div>
          </div>
          <div class="song amplitude-song-container amplitude-play-pause"  data-amplitude-song-index="9">
            <span class="song-position">10</span>
            <img class="song-album-art" data-amplitude-song-info="cover_art_url" data-amplitude-song-index="9"/>
            <div class="song-meta-data-container">
              <span class="song-name" data-amplitude-song-info="name" data-amplitude-song-index="9"></span>
              <span class="song-artist" data-amplitude-song-info="artist" data-amplitude-song-index="9"></span>
            </div>
          </div>
          <div class="song amplitude-song-container amplitude-play-pause"  data-amplitude-song-index="10">
            <span class="song-position">11</span>
            <img class="song-album-art" data-amplitude-song-info="cover_art_url" data-amplitude-song-index="10"/>
            <div class="song-meta-data-container">
              <span class="song-name" data-amplitude-song-info="name" data-amplitude-song-index="10"></span>
              <span class="song-artist" data-amplitude-song-info="artist" data-amplitude-song-index="10"></span>
            </div>
          </div> -->
        </div>

        <div class="active-audio">
          <img class="cover-art-small" data-amplitude-song-info="cover_art_url"/>

          <div class="active-audio-right">
            <span class="song-name" data-amplitude-song-info="name"></span>

            <div class="active-audio-controls">
              <div class="amplitude-prev"></div>
              <div class="amplitude-play-pause"></div>
              <div class="amplitude-next"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="amplitude-right">
<div class="song amplitude-song-container amplitude-play-pause amplitude-paused" data-amplitude-song-index="0" style="background-color: rgb(255, 255, 255);">
<div class="song-now-playing-icon-container">
<div class="play-button-container" style="display: none;">
</div>
<img class="now-playing" src="/img/open-source/amplitudejs/blue-player/now-playing.svg">
</div>
<div class="song-meta-data">
<span class="song-title" style="color: rgb(39, 39, 38);">Risin' High (feat Raashan Ahmad)</span>
<span class="song-artist" style="color: rgb(96, 125, 139);">Ancient Astronauts</span>
</div>
<a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
<img class="bandcamp-grey" src="/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg" style="display: block;">
<img class="bandcamp-white" src="/img/open-source/amplitudejs/blue-player/bandcamp-white.svg" style="display: none;">
</a>
<span class="song-duration" style="color: rgb(96, 125, 139);">3:30</span>
</div>
<div class="song amplitude-song-container amplitude-play-pause amplitude-paused" data-amplitude-song-index="1" style="background-color: rgb(255, 255, 255);">
<div class="song-now-playing-icon-container">
<div class="play-button-container" style="display: none;">
</div>
<img class="now-playing" src="/img/open-source/amplitudejs/blue-player/now-playing.svg">
</div>
<div class="song-meta-data">
<span class="song-title" style="color: rgb(39, 39, 38);">The Gun</span>
<span class="song-artist" style="color: rgb(96, 125, 139);">Lorn</span>
</div>
<a href="https://lorn.bandcamp.com/" class="bandcamp-link" target="_blank">
<img class="bandcamp-grey" src="/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg" style="display: block;">
<img class="bandcamp-white" src="/img/open-source/amplitudejs/blue-player/bandcamp-white.svg" style="display: none;">
</a>
<span class="song-duration" style="color: rgb(96, 125, 139);">3:16</span>
</div>
<div class="song amplitude-song-container amplitude-play-pause amplitude-paused" data-amplitude-song-index="2" style="background-color: rgb(255, 255, 255);">
<div class="song-now-playing-icon-container">
<div class="play-button-container" style="display: none;">
</div>
<img class="now-playing" src="/img/open-source/amplitudejs/blue-player/now-playing.svg">
</div>
<div class="song-meta-data">
<span class="song-title" style="color: rgb(39, 39, 38);">Anvil</span>
<span class="song-artist" style="color: rgb(96, 125, 139);">Lorn</span>
</div>
<a href="https://lorn.bandcamp.com/" class="bandcamp-link" target="_blank">
<img class="bandcamp-grey" src="/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg" style="display: block;">
<img class="bandcamp-white" src="/img/open-source/amplitudejs/blue-player/bandcamp-white.svg" style="display: none;">
</a>
<span class="song-duration" style="color: rgb(96, 125, 139);">3:32</span>
</div>
<div class="song amplitude-song-container amplitude-play-pause amplitude-paused" data-amplitude-song-index="3" style="background-color: rgb(255, 255, 255);">
<div class="song-now-playing-icon-container">
<div class="play-button-container" style="display: none;">
</div>
<img class="now-playing" src="/img/open-source/amplitudejs/blue-player/now-playing.svg">
</div>
<div class="song-meta-data">
<span class="song-title" style="color: rgb(39, 39, 38);">I Came Running</span>
<span class="song-artist" style="color: rgb(96, 125, 139);">Ancient Astronauts</span>
</div>
<a href="https://switchstancerecordings.bandcamp.com/track/i-came-running" class="bandcamp-link" target="_blank">
<img class="bandcamp-grey" src="/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg" style="display: block;">
<img class="bandcamp-white" src="/img/open-source/amplitudejs/blue-player/bandcamp-white.svg" style="display: none;">
</a>
<span class="song-duration" style="color: rgb(96, 125, 139);">3:30</span>
</div>
<div class="song amplitude-song-container amplitude-play-pause amplitude-active-song-container amplitude-paused" data-amplitude-song-index="4" style="background-color: rgb(255, 255, 255);">
<div class="song-now-playing-icon-container">
<div class="play-button-container" style="display: none;">
</div>
<img class="now-playing" src="/img/open-source/amplitudejs/blue-player/now-playing.svg">
</div>
<div class="song-meta-data">
<span class="song-title" style="color: rgb(39, 39, 38);">First Snow</span>
<span class="song-artist" style="color: rgb(96, 125, 139);">Emancipator</span>
</div>
<a href="https://emancipator.bandcamp.com" class="bandcamp-link" target="_blank">
<img class="bandcamp-grey" src="/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg" style="display: block;">
<img class="bandcamp-white" src="/img/open-source/amplitudejs/blue-player/bandcamp-white.svg" style="display: none;">
</a>
<span class="song-duration" style="color: rgb(96, 125, 139);">5:12</span>
</div>
<div class="song amplitude-song-container amplitude-play-pause amplitude-paused" data-amplitude-song-index="5" style="background-color: rgb(255, 255, 255);">
<div class="song-now-playing-icon-container">
<div class="play-button-container" style="display: none;">
</div>
<img class="now-playing" src="/img/open-source/amplitudejs/blue-player/now-playing.svg">
</div>
<div class="song-meta-data">
<span class="song-title" style="color: rgb(39, 39, 38);">Analog Graffiti</span>
<span class="song-artist" style="color: rgb(96, 125, 139);">Brian Koceja</span>
</div>
<a href="https://open.spotify.com/track/7wqt6wYE8cu4qkeYV8jyO3" class="bandcamp-link" target="_blank">
<img class="bandcamp-grey" src="/img/open-source/amplitudejs/blue-player/spotify-grey.svg" style="display: block;">
<img class="bandcamp-white" src="/img/open-source/amplitudejs/blue-player/spotify-color.svg" style="display: none;">
</a>
<span class="song-duration" style="color: rgb(96, 125, 139);">2:04</span>
</div>
<div class="song amplitude-song-container amplitude-play-pause amplitude-paused" data-amplitude-song-index="6" style="background-color: rgb(255, 255, 255);">
<div class="song-now-playing-icon-container">
<div class="play-button-container" style="display: none;">
</div>
<img class="now-playing" src="/img/open-source/amplitudejs/blue-player/now-playing.svg">
</div>
<div class="song-meta-data">
<span class="song-title" style="color: rgb(39, 39, 38);">Lake</span>
<span class="song-artist" style="color: rgb(96, 125, 139);">Wine &amp; Ice</span>
</div>
<a href="https://open.spotify.com/track/0wfU0j1Hj0vYeOABfGSFA1" class="bandcamp-link" target="_blank">
<img class="bandcamp-grey" src="/img/open-source/amplitudejs/blue-player/spotify-grey.svg" style="display: block;">
<img class="bandcamp-white" src="/img/open-source/amplitudejs/blue-player/spotify-color.svg" style="display: none;">
</a>
<span class="song-duration" style="color: rgb(96, 125, 139);">3:15</span>
</div>
<div class="song amplitude-song-container amplitude-play-pause amplitude-paused" data-amplitude-song-index="7" style="background-color: rgb(255, 255, 255);">
<div class="song-now-playing-icon-container">
<div class="play-button-container" style="display: none;">
</div>
<img class="now-playing" src="/img/open-source/amplitudejs/blue-player/now-playing.svg">
</div>
<div class="song-meta-data">
<span class="song-title" style="color: rgb(39, 39, 38);">Always Moving Forward</span>
<span class="song-artist" style="color: rgb(96, 125, 139);">Wine &amp; Ice</span>
</div>
<a href="https://open.spotify.com/track/5jHDk4MrM3lsi6Ooxn8K0Z" class="bandcamp-link" target="_blank">
<img class="bandcamp-grey" src="/img/open-source/amplitudejs/blue-player/spotify-grey.svg" style="display: block;">
<img class="bandcamp-white" src="/img/open-source/amplitudejs/blue-player/spotify-color.svg" style="display: none;">
</a>
<span class="song-duration" style="color: rgb(96, 125, 139);">4:29</span>
</div>
<div class="song amplitude-song-container amplitude-play-pause amplitude-paused" data-amplitude-song-index="8" style="background-color: rgb(255, 255, 255);">
<div class="song-now-playing-icon-container">
<div class="play-button-container" style="display: none;">
</div>
<img class="now-playing" src="/img/open-source/amplitudejs/blue-player/now-playing.svg">
</div>
<div class="song-meta-data">
<span class="song-title" style="color: rgb(39, 39, 38);">Offcut #6</span>
<span class="song-artist" style="color: rgb(96, 125, 139);">Little People</span>
</div>
<a href="https://littlepeople.bandcamp.com/track/offcut-6" class="bandcamp-link" target="_blank">
<img class="bandcamp-grey" src="/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg" style="display: block;">
<img class="bandcamp-white" src="/img/open-source/amplitudejs/blue-player/bandcamp-white.svg" style="display: none;">
</a>
<span class="song-duration" style="color: rgb(96, 125, 139);">1:00</span>
</div>
<div class="song amplitude-song-container amplitude-play-pause amplitude-paused" data-amplitude-song-index="9" style="background-color: rgb(255, 255, 255);">
<div class="song-now-playing-icon-container">
<div class="play-button-container" style="display: none;">
</div>
<img class="now-playing" src="/img/open-source/amplitudejs/blue-player/now-playing.svg">
</div>
<div class="song-meta-data">
<span class="song-title" style="color: rgb(39, 39, 38);">Dusk To Dawn</span>
<span class="song-artist" style="color: rgb(96, 125, 139);">Emancipator</span>
</div>
<a href="https://emancipator.bandcamp.com/track/dusk-to-dawn-2" class="bandcamp-link" target="_blank">
<img class="bandcamp-grey" src="/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg" style="display: block;">
<img class="bandcamp-white" src="/img/open-source/amplitudejs/blue-player/bandcamp-white.svg" style="display: none;">
</a>
<span class="song-duration" style="color: rgb(96, 125, 139);">5:25</span>
</div>
<div class="song amplitude-song-container amplitude-play-pause amplitude-paused" data-amplitude-song-index="10">
<div class="song-now-playing-icon-container">
<div class="play-button-container">
</div>
<img class="now-playing" src="/img/open-source/amplitudejs/blue-player/now-playing.svg">
</div>
<div class="song-meta-data">
<span class="song-title">Anthem</span>
<span class="song-artist">Emancipator</span>
</div>
<a href="https://emancipator.bandcamp.com/track/anthem" class="bandcamp-link" target="_blank">
<img class="bandcamp-grey" src="/img/open-source/amplitudejs/blue-player/bandcamp-grey.svg">
<img class="bandcamp-white" src="/img/open-source/amplitudejs/blue-player/bandcamp-white.svg">
</a>
<span class="song-duration">5:40</span>
</div>
</div>

    <div id="pre-load-img-container">
      <img src="https://521dimensions.com/img/open-source/amplitudejs/examples/visualizations/play.svg"/>
      <img src="https://521dimensions.com/img/open-source/amplitudejs/examples/visualizations/pause.svg"/>
      <img src="https://521dimensions.com/img/open-source/amplitudejs/examples/visualizations/next.svg"/>
      <img src="https://521dimensions.com/img/open-source/amplitudejs/examples/visualizations/prev.svg"/>
    </div>
    
    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
      <defs>
        <linearGradient id="gradient" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#03C1EB" />
          <stop offset="100%" stop-color="#86F3B8" />
        </linearGradient>
      </defs>
    </svg>
    <!--
      Include UX functions JS

      NOTE: These are for handling things outside of the scope of AmplitudeJS
    -->
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/functions.js"></script>

    */?>



