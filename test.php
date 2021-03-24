<input type="radio" name="colors" value="{{color.id}}" id="{{color.id}}-option" class="color_radion"  onclick="return get_images(this, {{color.id}})">

<script>
  function get_images(obj, color){
    console.log($("input[type='radio'][name='colors']:checked").val());

  }
  </script>