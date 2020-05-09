<?=template_header('Home')?>
<div class="container-fluid">
  <div class="row" style="margin-top: 4em; height:auto;">
    <div class="col-xl-6 col-sm-12">
    <div class="bingwidget" data-type="covid19_modules" data-modules='[{"_type": "stats", "location-id":"/Philippines"},{"_type": "stats", "location-id":"/"},  {"_type": "map", "location-id":"/Philippines"},  {"_type": "trends", "location-id":"/Philippines"}]'></div>
  <script src="//www.bing.com/widget/bootstrap.answer.js" async=""></script>
    </div>
    <div class="col-xl-6 col-sm-12">
    Test
  </div>
</div>
<?=template_footer()?>
