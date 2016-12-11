<!doctype html>
<html lang="en-US" prefix="og: http://ogp.me/ns#" class="">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="http://w3bits.com/wp-content/themes/bits2/labs.css">
	<title>Responsive CSS Masonry - W3Bits</title>
	
<!-- This site is optimized with the Yoast SEO plugin v3.5 - https://yoast.com/wordpress/plugins/seo/ -->
<link rel="canonical" href="http://w3bits.com/labs/css-masonry/" />
<link rel="next" href="http://w3bits.com/labs/css-masonry/2/" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Responsive CSS Masonry - W3Bits" />
<meta property="og:description" content="CSS Masonry 100% Responsive. Resize the browser window to see the action. With Gutter Bordered Gutterless" />
<meta property="og:url" content="http://w3bits.com/labs/css-masonry/" />
<meta property="og:site_name" content="W3Bits" />
<meta property="og:image" content="https://lh3.googleusercontent.com/Z6QBh_jHNXVbEQyRz9IJXRbS7zMLsmQSp_ntGN4FWpkNANiSlhJV06jis4JX9o4PpSTednt2-d4lTMFuQGLWANNAVvSiyQSfVdnqfP7jed120PbZ_q4yz_HhGhq1vZhHeL4bbcD4iCZJgRvNonGTFtALG7jVDEn2IKnc57_OA57l7odhvBbe25ycU1qWPn-fj1uHFEPwPGEJQz6_5PWWmawnZKpR6Nufi1EKMglC9uCLnhvs8apRWd7xMg3oDcsigdssiBsm35FyhwY8Cl4l9q3qtWbRgMZGD0sOI8-IAz62hY7kkb38ajKzTka249n4hdQ8zqi_3-NWKPi2hsayKP0TaMOirUo63lGwZhw0B-IhmzaQOj4y41fBXN7m9hDk4kXPUdkvA8HXIrJdQL2vFs05ix_JMc_aw62TSWLGCc6BJX3GMCZaHJoFwULNGP826Xwi8sduK592NUcWewG4ew57uGvNYrAiha-4_ogKTMpXYWj1saZzmA-KWNsyT-6KQXH3MG0ZhCroU2yy469Gg-23l0oSxHNpyhYjnSgm5Yw0xZxXgUnO9EGKzIGCHIJPIDOvJOW9wmcesQcNayev3zGxan44Qr9mGQ1QtqWWV1b9UaAB=s1200" />
<meta property="og:image" content="https://lh3.googleusercontent.com/OHluRJFZ6GwwXjQcbKlgm3RSMQyy1HrpXSRetGv0kZWbwZk2DZrRqqJle32lMkAVooXNmgsoSaizjrtPwMSyrWVAsKXKzm4WXn2Iwn20bJ0MrK2nDJhZudBKlZ0KdcG5b5RU48YletVAbWHNPlUJSM7K8ClIcvSzeAerocMiscXxWYxuBQHo5es-Aikc1cd6UKsNTs6sCdA0jdS7ksJPKGO8CT9Q6RKYbEBOlPV-pWYnZe-3ksB75TKatnBARaHK-raaLTIBX5RxwFzKjTo5uLWbqpnuNTa7Qd_CDnB8-nokNSrDyaiF-miPiR5AhrK6O2Y-KgpCsjjaJDRkQ9JeayX-5GG2iVEigGzP_yHyO6Byd5qSto5ujUqsqGskXS_E2mz_1lDe8ig_j_kAZ1XV6hIv9GCvmlI0Hy0uoSPYfF73kPoMQ9w7vvSpL1SFpqeQpJwcSWPkdZhcUCVlAX55XdZqvNic983LCK4bSRk80hBHOXSNi8jSNitgHJES2dOcWVwl3Zn9M6exiptcn3Ezk3iDDDBTuz2e8jL9M1zl6yp2I5n-_-5Th4wHA6Fik71vD0tUlwWPg0HndzzF0V1WbCjapAaKMeRo_ymEHjiOhl6t41_P=w1152-h768-no" />
<meta property="og:image" content="https://lh3.googleusercontent.com/Sn1qiF9Ccumf-hY2w9OTfF8slFQrzODw83It5iTDNZ_nh6PbZJ8jMSu40o_adNVw8A10Bhaxhkq19kzfKbi8oG79vwF3J9xmh0YKi6oTYzFQBTJUEPjVb1q9IoBnY63upWf30uekIuPxDY_cmg11kF701fZyT5saAyqttWDFGpU3sDZzRJ3780NR8jwjzEWc-xLeFLquAQUU-Rdn0HWD9MirVeMzM5QQf3gsqvC2FWsGUTIvSHAvc0wywvko6_aAO1tV17Ag58aEEpPwam2dxpNCjFVuNAJ_Uf_JbofesLkergCH4eY_QiNPksJiAsjCmSo6Q_3CTYfEGHiE8OJND_E93YNeQtR1Mw2wmDdQt3hhDQsyE-tJPV9NuzhgH4ObQg9LyRV1HnwYBOS3lMEgyQIYEpYYpxlMJcgon4ujL958j4eK1-hGfgSPNMxAkLDSVNrAY7J9qQp0daUwJm_aF_t_CuVl4Nq7Ing7tKvGNjTQsm8Gbchn9hiy1NrpgWXj9oHiC7mX-zJLLzK8AcKHuZfjVi1QzqEyxuNmY_CfOEdRheoM8g6enkD_UUYlmTEXYE4njUbx2rSqKoMaY_0Rq9ctxlE2L1dAd5M-RY4MWiLhWkXP=w1072-h657-no" />
<meta property="og:image" content="https://lh3.googleusercontent.com/ZNWN3X5Hz7eQXDHwvwBc8vuDg-FG2UEmWgFpz_Nn_VCKDXigRQh8-0GIdaQiJc3epZB9pHwFFewou7eVwg29SZgku30U0eA92b8rYrhNQIAlTJhmupAw3aS4LNIqdvdMPdIMCQeAQiMqRL_3nPFGojwQf2fT9DXunxILa6MLE3HEm308pdY4lJiF66rBpA49mmf63H2ZcbJWYlymv_ebPx174uGd2NtQoSOVfye_YvAmX-Y4kw2FFJaRaJcccSDEGxkMpij3tUUfA4BbYCydqxS5DW7ecWFyBbFEQNGh-QnWdvulz68GaIz_yEglt1_glxBWNwG33B72O_HKeC89EcEyrYv7c2CnJsLtqClTzWb0WZqduAiU8lPWBxP5qN3wtXdpmxMvpcEE5D1pmsY4BZJWut3YlBp9ypC5kEcxjnU8Ev_MQJrf8VsX82fTwKrcsuE4-ckfpk7ebbtxFVYoy85kguZOWnbnvn1aM4o0Kx7pVshyKmbdavt0QO3pfaH2Pz3G9neZ3R5S7baapCbGcV7cLRvk_Sv_HBrKhNIORzcQEffZ3kCpBOxekeDoxoo_EGQuybvouxDm0mzFSlttNN_zVzPxmB0JfXSbgseOf0chysxi=w986-h657-no" />
<meta property="og:image" content="https://lh3.googleusercontent.com/yxa4n93DLGLeleRITAr1GmNI7RSZE5Q7Jm_0ATV_yyzNi4Xp2F_Z_wU5QJlLDu7wmQAx8wiNlxM4foWz91wto0iYuuN36TLmxFxhDCqGs3R_-M08On8YBb0CS6jCUOusXNmg10u7gL01WAx7T2V4v5ggHfPKq8sDVQxurNBvOa6MWLtRcgQzpVIoRmYImwunvAAiCsLcS0tGHVf5GZdWVPaswrWinZrWoIz25uOQIKPwV1GZ1yVJ439n23VwVpX0-5KIBh1Sj3Dpv5-MmLMAO6m5fmEsuLsFFxfICHjsOv8TFvbRr_8rfC6cqTQVBMNkCssAy09We0WwSQQqtoVrAzPQOLGZo5by4om_eFbWux-6-dkUecdIKFBr5PbJvReVdNh-H7-nRcSkFt7b70GCtGitm659bt_crQ9tTllV-yCFaBm7Dc_Af06Afn8X_zK2IMjl0h9-dooKRdbOSA21doM0IZ2iapEk6uwhqhFBhj9FJRh2j6ZaoizgWCJTMTsm3P2gscdlPOkzQCZ_qfdqAkIO4E2L9FUF4Rp56E_v1Rp8qtQxZ_AMW-x6sybvz1UF2gWuSdJ8AiQouxkVbNxpgtXj4XxHnczo8HzEjfMgjjtgbyIm=w1028-h657-no" />
<meta property="og:image" content="https://lh3.googleusercontent.com/E1iYfNYem38eXCdFO2jNFY-oM__ROHiuH28xYXVH5lVPa51NEOfORhl1i0QFwdm4R_qH1mIWF_sSVI1c0NGLzjVBmfjlGHnHwblzErYzZAOeti3kDlfu-bZhaGgeM0fZmpvf1aTnjMNI4pcAAa7lShTtqrGoj20te3WVqIWVK4QlHKkJ1M2heAkvb5me-7w2XNBhjpp97MkUrKr599ei6bxPrmckLQN7p-uRHkf8WaRif18KrLOmunT5K3lJMaEqN9HntQJ5YoxV4mWKr40hu01BnzpoyBmZuLSTUE5kvKqkxUzXCk6skMri469aYsSQ9GbsI2gSWh6YtUhkFwr1XElg2QGyKTVMwUTxBtSuSi6C7JimTc11hRkkVloTsn3AEY5d-Wv4cl5l89Zhxv1sEQADGDGrWjXVOG61wnjSb2s0AkdhSvCzRwGW_N3PfHUB6sJSqj1UMvU6MBa02JNv8IpgHWoXqcAjkuMzMNWFoda-TsuENXdrCKnMLbzliLelyDVfz0-oGdbOU9tx1BbOUetys4dRtKQo3sUnA_PtZA19nrHi1jU7PpqnH7sPjcWD4EKKNp6AnksYkK6dQrgjiSdVZ6oK3Xa4GIZj5RBW3MWUJezs=w524-h657-no" />
<meta property="og:image" content="https://lh3.googleusercontent.com/ruLmS00ZTOFkwsBz-_EyPA1MwwYXWan4nx-QBm__bLAayF_mYikwDD4LjFH_Idkafi7yr3rMbAqv-FC16mM5tV_KWtqrhDgkw6B3KTHruKVZVb6w9Qr0xlM2ADWITAlrnUoGklTx_KqQQ0H8Y_mQf3RrlMC8-9HWKGHxagezc1hPifSLnHuQnAPUlBCChIxu74GdXXOLRqWF5NbFQRKKkGi4jj_7mG1Xlj8OViyRJBX60C_S3ocuRQVLWvk8_KGFfKlCH7yhTmMBjidtGqAZ7tOGVxY5QecKeIkJ2gmytf3CRhbrtyBPlnOwMHtWDTn9c1zYL7bU8Fhzb44eXLOb7PXvEV5gP6TMzaXXcvkACg_Do2oGq3febL88bG26Lo9WdMmkHz3JMZvM1NtKAoLFMziIhNAxB7Ph3VWIjeQUU5E-fXLCuZgZv0qQoqQU7qFEbzsKP36HBRcrp2P7BBh7bl83rPqfEN6FQSYeKcfKXxr_OlZ6Q7SbjkFD3EWi3qYT8VIBbU1gD4QAGmkg15_5fW6xRk4JL6aU0JUrIRvMwS_PgiSQLs7lXIOgXFa-t12w3_wj9etZQTQMhTYDWt4Ihx0-vYjWcXK6Y1syHrr4YwXcj29v=w493-h657-no" />
<meta property="og:image" content="https://lh3.googleusercontent.com/bQVoweUBz0AnYnhoQqPhCPlRknlOjaPkBeDC6AzbjnL2dQPAnj4OlSr7PLMKhoHLWYk7WxiPZlro1oJqytUrAwu8YLixc_8dignzGyLhMKmS3TTXH6pU6rU3UpC_Z5RKYW1VewBiXYsv75iZRCOHRUKedUbyBx4B9rWpjV-Uq4_RLwAPEPHWeLlEx_HiiuUmnjmhpvLofasm4WKB0wvnFUbw-uGRBwZiY6kTi6pzRJXpnHxkCXMsRguGmBnYcU1a1KFR3SRkcbbXZCY03pkKBgic93AHyTJ464qU8PHPxNy04v4I87YmshCy8g9dGzdmBQH7fo78JU9RcJ-udecm4AlOuIVCpFa0Ysh1mIaPmycLda_5pFJtWJb8uHz3ybR8RJGqMQsks_PZ7HwjOgFUcD0ToRvXgYnzCLaTmJhhyf6oqHujaA8wWkkdrtENjHA82-99RKu4OBcdWa3upnz7sHZT3ps0GdFyu6rXDEQ4yXnwGLMCZ_l4uJvpoLM4MCvXFETtslQt7I_nzafAR3Jy9MrGrcslFhOSw6ZyLY2ckKgnc1SoSuWyEb9OMApxrkcweEknMmMjDI4PrvBXzU66CTrz2wyIxnXWVVB_MNglDE1IZZAh=w986-h657-no" />
<meta property="og:image" content="https://lh3.googleusercontent.com/mFvvof4PyZNt9gRhxbdjVAz9mNUt7a9l2lfdoUTbWVAoTwgRoseuSY-HpOysVn9e6YQauijD1AfrfR18ozsk6IiIuE6bd3IDJZDyfQljKLhs5dH-vEkvfyvJMdBRkVZCm2AmTxrfmgnpmjLwatQ0pkRHOqzzGG80gfQY7srBRDeMnSSEji8ozukN8Ag6mL_Ca7l8tef0nA2xO_UBMXgykPVI8bb2yqbbpxBiB2Jo3Y9iVTLbLbydnSn0lQkAIbDjpFLNKFTICqNVq1flc2mcLZ46khgE4KzpHPPo_ZsJM6hwPvIfJFcOCCz2Az0aJpYnzF613tGy2MPPHinkdG-4-H7QsRO7gV0o0FuI5U-f3pHktlpHL3uMniG85ke7dEZbBqZ3I78TmhxQfjAb8KOIYqJ7g23_Rph3FdlIpCyylhZoYccaT9y8XujROXgOdKaBQPMvPqdL6hM7p9P2skXYYzvtbwWLZzr9kGTk4FOX5dRQ-EktT3eRVfAVr7TWgHWwd2GgDQuQDhZp9pjZt7b5-7m80rfaiXYQVZjIT98u9XYD0sxlFd9SJdIpqCMX6mNtqp4sI62B_5-ESCDohTlVuH8X16s7zmOM8lCNZhJkfzBcpSXD=w986-h657-no" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="CSS Masonry 100% Responsive. Resize the browser window to see the action. With Gutter Bordered Gutterless" />
<meta name="twitter:title" content="Responsive CSS Masonry - W3Bits" />
<meta name="twitter:site" content="@w3bits_" />
<meta name="twitter:image" content="https://lh3.googleusercontent.com/Z6QBh_jHNXVbEQyRz9IJXRbS7zMLsmQSp_ntGN4FWpkNANiSlhJV06jis4JX9o4PpSTednt2-d4lTMFuQGLWANNAVvSiyQSfVdnqfP7jed120PbZ_q4yz_HhGhq1vZhHeL4bbcD4iCZJgRvNonGTFtALG7jVDEn2IKnc57_OA57l7odhvBbe25ycU1qWPn-fj1uHFEPwPGEJQz6_5PWWmawnZKpR6Nufi1EKMglC9uCLnhvs8apRWd7xMg3oDcsigdssiBsm35FyhwY8Cl4l9q3qtWbRgMZGD0sOI8-IAz62hY7kkb38ajKzTka249n4hdQ8zqi_3-NWKPi2hsayKP0TaMOirUo63lGwZhw0B-IhmzaQOj4y41fBXN7m9hDk4kXPUdkvA8HXIrJdQL2vFs05ix_JMc_aw62TSWLGCc6BJX3GMCZaHJoFwULNGP826Xwi8sduK592NUcWewG4ew57uGvNYrAiha-4_ogKTMpXYWj1saZzmA-KWNsyT-6KQXH3MG0ZhCroU2yy469Gg-23l0oSxHNpyhYjnSgm5Yw0xZxXgUnO9EGKzIGCHIJPIDOvJOW9wmcesQcNayev3zGxan44Qr9mGQ1QtqWWV1b9UaAB=s1200" />
<meta name="twitter:creator" content="@w3bits_" />
<!-- / Yoast SEO plugin. -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom-css.css" rel="stylesheet">

<link rel='dns-prefetch' href='//s.w.org' />
<link rel='stylesheet' id='double-opt-in-for-download-plugin-styles-css'  href='http://w3bits.com/wp-content/plugins/double-opt-in-for-download/public/assets/css/style.css?ver=2.1.3' type='text/css' media='all' />
<link rel='https://api.w.org/' href='http://w3bits.com/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://w3bits.com/xmlrpc.php?rsd" />
<link rel='shortlink' href='http://w3bits.com/?p=2409' />
<link rel="alternate" type="application/json+oembed" href="http://w3bits.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fw3bits.com%2Flabs%2Fcss-masonry%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://w3bits.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fw3bits.com%2Flabs%2Fcss-masonry%2F&#038;format=xml" />
</style>
<style>

body {
  background: #f9f9f9;
  color: #465665;
}

img {
  max-width: 100%;
  vertical-align: bottom;
}

.wrapper {
  width: 92.5%;
  padding: 1em;
}

.title {
  font-weight: 700;
}

.desc {
  font-size: 1em;
  font-style: italic;
  font-family: Georgia, serif;
}

.title,
.desc,
.intro {
  text-align: center;
}

a {
  color: #5b7083;
  -moz-transition: all .25s ease-in-out;
  -webkit-transition: all .25s ease-in-out;
  transition: all .25s ease-in-out;
}

.intro {
  margin: 1.75em 0 .75em;
  border-bottom: 3px double rgba(0, 0, 0, 0.05);
  margin-bottom: 1.75em;
}
.intro a {
  opacity: .7;
}
/*.intro a:hover {
  opacity: 1;
}*/
.intro h3 {
  font-size: .825em;
  font-weight: 700;
  text-transform: uppercase;
  display: inline-block;
  margin: .25em .75em .75em;
}
.intro h3 a {
  font-weight: 400;
}

.back-to-article {
  font-weight: 700;
  display: block;
  margin: 2em 0 0;
  padding: 1.25em;
  text-align: center;
  color: #CAD0DC;
  border: 3px solid #D1D8DE;
}
/*.back-to-article:hover {
  color: #465665;
  border-color: #5b7083;
}*/

.masonry {
  -moz-transition: all .5s ease-in-out;
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  -moz-column-gap: 30px;
  -webkit-column-gap: 30px;
  column-gap: 30px;
  -moz-column-fill: initial;
  -webkit-column-fill: initial;
  column-fill: initial;
}
.masonry .brick {
  margin-bottom: 30px;
}
.masonry .brick img {
  -moz-transition: all .5s ease-in-out;
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
}
.masonry .brick:hover img {
  opacity: .75;
}
.masonry.bordered {
  -moz-column-rule: 1px solid #eee;
  -webkit-column-rule: 1px solid #eee;
  column-rule: 1px solid #eee;
  -moz-column-gap: 50px;
  -webkit-column-gap: 50px;
  column-gap: 50px;
}
.masonry.bordered .brick {
  padding-bottom: 25px;
  margin-bottom: 25px;
  border-bottom: 1px solid #eee;
}
.masonry.gutterless {
  -moz-column-gap: 0;
  -webkit-column-gap: 0;
  column-gap: 0;
}
.masonry.gutterless .brick {
  margin-bottom: 0;
}

.span {
  -moz-column-span: all;
  -webkit-column-span: all;
  column-span: all;
  margin: 30px 0;
}

@media only screen and (min-width: 1024px) {
  .desc {
    font-size: 1.25em;
  }

  .intro {
    letter-spacing: 1px;
  }

  .wrapper {
    width: 80%;
    padding: 2em;
  }

  .masonry {
    -moz-column-count: 3;
    -webkit-column-count: 3;
    column-count: 3;
  }
}
@media only screen and (min-width: 768px) and (max-width: 1023px) {
  .wrapper {
    width: 85%;
    padding: 1.5em;
  }

  .masonry {
    -moz-column-count: 2;
    -webkit-column-count: 2;
    column-count: 2;
  }
}
</style>

</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">About Us</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<div class="wrapper">
  
    <div class="masonry">
      <?php  

        for ($i=2; $i < 37; $i++) { 
         
          echo "<div class='brick'>";
            //The images
            echo "<img src='images/$i.jpg'>";
          echo "</div>";
          
        }

      ?>
    </div>

  </div>

<script src="js/bootstrap.min.js"></script>

<script>
document.getElementById("bup-cb").addEventListener("click", function() {
document.getElementById("bup").style.display="none";
}, false);(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-10703354-8', 'w3bits.com');
ga('require', 'displayfeatures');
ga('send', 'pageview');
(function(){
  var bsa = document.createElement('script');
     bsa.type = 'text/javascript';
     bsa.async = true;
     bsa.src = '//s3.buysellads.com/ac/bsa.js';
  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
})();
</script>
<script type='text/javascript' src='http://w3bits.com/wp-content/themes/bits2/js/base.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://w3bits.com/wp-content/themes/bits2/js/prettify.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://w3bits.com/wp-includes/js/wp-embed.min.js?ver=4.6.1'></script>
</body>
</html>