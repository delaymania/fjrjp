$(function() {
    var player;

    $('body').append('<script src="https://www.youtube.com/iframe_api">');

    function resizeMovie () {
        var $w = $(window),
              bw = 1200,//基準にする横幅
              bh = (bw/16) * 9,//基準にする高さ(16:9)
              w = $w.width(),//表示サイズ(幅)
              h = $w.height(),//表示サイズ(高さ)
              mw = w,//動画サイズ(幅)
              mh =  Math.round(bh * (mw/bw));//動画サイズ(高さ)

        if ( mh < h ) {//動画の高さが表示サイズの高さより小さかったら
            mh = h;//表示サイズの高さに変更
            mw = Math.round(bw * (mh/bh));//高さに合わせて横幅変更
        }

        console.log(w, h, mw, mh);

        $('#player').css({
            width: mw,
            height: mh,
            marginTop: (h - mh)/2,
            marginLeft: (w - mw)/2
        });

    }

    resizeMovie();

    $(window).resize(resizeMovie);

    $('#player_cover').click(function() {
        switch(player.getPlayerState()) {
            case 1:
                player.pauseVideo();
                break;
            default:
                player.playVideo();

        }
    });

    function onPlayerReady(event) {
        $('#loader').delay(500).animate({"opacity":0}, 800, "swing", function() {
            $(this).css('display', 'none');
        });
        event.target.mute(); //音声をミュート
    }

    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.ENDED) {
            player.playVideo();
        }
    }

    var onYouTubeIframeAPIReady = function () {
        player = new YT.Player('player', {
            videoId: 'PMUFOVg7fz8',
            playerVars: {
				'autoplay': 1, //プレーヤーを読み込んだときに最初の動画を自動再生する
				'controls': 0, //プレーヤーにプレーヤーコントロールを表示しない
				'enablejsapi': 1, //JavaScript API が有効
				'iv_load_policy': 3, //動画アノテーションを表示しない
				'disablekb':1, //キーボード操作をOFF
				'showinfo':0, //動画の再生が始まる前に動画のタイトルなどの情報を表示しない
				'rel':0, //再生終了時に関連動画を表示しない
				'start': 0 //00:05から再生する
            },
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    };

    window.onYouTubeIframeAPIReady = onYouTubeIframeAPIReady;


});
