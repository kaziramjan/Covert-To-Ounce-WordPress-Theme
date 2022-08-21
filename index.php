<?php get_header(); ?>
        <!-- ======= MAIN BODY ======= -->
        <!-- ======= BANNER SECTION ======= -->
        <section id="banner" class="banner d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="section-title">

                    <div class="btn-group mb-3" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-success" id="ponds">Pounds</button>
                        <button type="button" class="btn btn-success" id="kilograms">Kilograms</button>
                        <button type="button" class="btn btn-success" id="grams">Grams</button>
                        <button type="button" class="btn btn-success" id="gallon">Gallon</button>
                        <button type="button" class="btn btn-success" id="cups">Cups</button>
                        <button type="button" class="btn btn-success" id="quart">Quart</button>
                        <button type="button" class="btn btn-success" id="pint">Pint</button>
                        <button type="button" class="btn btn-success" id="liter">Liter</button>
                        <button type="button" class="btn btn-success" id="ml">ML</button>
                        <button type="button" class="btn btn-success" id="troyounce">Troy ounce</button>
                        <button type="button" class="btn btn-success" id="tablespoons">Tablespoons</button>   
                    </div>
                    <br><br>
                    <button type="button" class="btn btn-primary btn-lg">Ounces: <span id="output"></span></button> 



                        
                            <!-------- POUNDS---------->
                            <p class="pon allweight">
                                   <label>Pounds</label>
                                    <input id="inputPounds" type="number" placeholder="Pounds" oninput="weightConverterPoundsToOunces(this.value)" onchange="weightConverterPoundsToOunces(this.value)">                                   
                            </p>
                            <!-------- Kilograms ---------->
                            <p class="kil allweight">
                              <label>Kilograms</label>
                              <input id="inputKilograms" type="number" placeholder="Kilograms" oninput="weightConverterKilToOunces(this.value)" onchange="weightConverterKilToOunces(this.value)">
                            </p>
                            <!-------- Grams ---------->
                            <p class="gra allweight">
                              <label>Grams</label>
                              <input id="inputGrams" type="number" placeholder="Grams" oninput="weightConverterGramsToOunce(this.value)" onchange="weightConverterGramsToOunce(this.value)">
                            </p>
                            <!-------- Gallon ---------->
                            <p class="gal allweight">
                              <label>Gallons</label>
                              <input id="inputGallons" type="number" placeholder="Gallons" oninput="weightConverterGallonsToOunce(this.value)" onchange="weightConverterGallonsToOunce(this.value)">
                            </p>
                            <!-------- Cups ---------->
                            <p class="cup allweight">
                              <label>Cups</label>
                              <input id="inputCups" type="number" placeholder="Cups" oninput="weightConverterCupsToOunce(this.value)" onchange="weightConverterCupsToOunce(this.value)">
                            </p>
                            <!-------- Quart ---------->
                            <p class="qrt allweight">
                              <label>Quart</label>
                              <input id="inputQuart" type="number" placeholder="Quart" oninput="weightConverterQuartToOunce(this.value)" onchange="weightConverterQuartToOunce(this.value)">
                            </p>
                            <!-------- Pint ---------->
                            <p class="pnt allweight">
                              <label>Pint</label>
                              <input id="inputPint" type="number" placeholder="Pint" oninput="weightConverterPintToOunce(this.value)" onchange="weightConverterPintToOunce(this.value)">
                            </p>                           
                            <!-------- Liter ---------->
                            <p class="ltr allweight">
                              <label>Liter</label>
                              <input id="inputPint" type="number" placeholder="Liter" oninput="weightConverterLiterToOunce(this.value)" onchange="weightConverterLiterToOunce(this.value)">
                            </p>   
                            <!-------- ML ---------->
                            <p class="m_l allweight">
                              <label>ML</label>
                              <input id="inputPint" type="number" placeholder="ml" oninput="weightConverterMLToOunce(this.value)" onchange="weightConverterMLToOunce(this.value)">
                            </p>   
                            <!--------  Troy ounce ---------->
                            <p class="tryonc allweight">
                              <label>Troy ounce</label>
                              <input id="inputPint" type="number" placeholder="Troy ounce" oninput="weightConverterTroyOunceToOunce(this.value)" onchange="weightConverterTroyOunceToOunce(this.value)">
                            </p>   
                            <!--------  Troy ounce ---------->
                            <p class="tblspns allweight">
                              <label>Tablespoons</label>
                              <input id="inputPint" type="number" placeholder="Tablespoons" oninput="weightConverterTablespoonsToOunce(this.value)" onchange="weightConverterTablespoonsToOunce(this.value)">
                            </p>   



                            <script>
                            //-------- POUNDS----------
                            function weightConverterPoundsToOunces(valPou) {
                              document.getElementById("output").innerHTML=valPou*16;
                            }
                            //-------- Kilograms----------
                            function weightConverterKilToOunces(valKil) {
                              document.getElementById("output").innerHTML=valKil*35.274;
                            }
                            //-------- Grams----------
                            function weightConverterGramsToOunce(valGrams) {
                              document.getElementById("output").innerHTML=valGrams*0.035274;
                            }
                            //-------- Gallons----------
                            function weightConverterGallonsToOunce(valGallons) {
                              document.getElementById("output").innerHTML=valGallons*128;
                            }
                            //-------- Cups----------
                            function weightConverterCupsToOunce(valCups) {
                              document.getElementById("output").innerHTML=valCups*8;
                            }
                            //-------- Quart----------
                            function weightConverterQuartToOunce(valQuart) {
                              document.getElementById("output").innerHTML=valQuart*32;
                            }
                            //-------- Pint----------
                            function weightConverterPintToOunce(valPint) {
                              document.getElementById("output").innerHTML=valPint*16;
                            }
                            //-------- Liter----------
                            function weightConverterLiterToOunce(valLiter) {
                              document.getElementById("output").innerHTML=valLiter*33.814;
                            }
                            //-------- ML----------
                            function weightConverterMLToOunce(valML) {
                              document.getElementById("output").innerHTML=valML*0.033814;
                            }
                            //-------- Troy ounce----------
                            function weightConverterTroyOunceToOunce(valTroyounce) {
                              document.getElementById("output").innerHTML=valTroyounce*1.09714;
                            }
                            //-------- Tablespoons----------
                            function weightConverterTablespoonsToOunce(valTablespoons) {
                              document.getElementById("output").innerHTML=valTablespoons*0.5;
                            }                              
                            </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

$(document).ready(function(){
    $(".allweight").hide();
});

$(document).ready(function(){

  $('#ponds').click(function(){
    $(".pon").show();
    $(".kil, .gra, .gal, .cup, .qrt, .pnt, .ltr, .m_l, .tryonc, .tblspns").hide();
  });

  $('#kilograms').click(function(){
    $(".kil").show();
    $(".pon, .gra, .gal, .cup, .qrt, .pnt, .ltr, .m_l, .tryonc, .tblspns").hide();
  });

  $('#grams').click(function(){
    $(".gra").show();
    $(".pon, .kil, .gal, .cup, .qrt, .pnt, .ltr, .m_l, .tryonc, .tblspns").hide();
  });

  $('#gallon').click(function(){
    $(".gal").show();
    $(".pon, .kil, .gra, .cup, .qrt, .pnt, .ltr, .m_l, .tryonc, .tblspns").hide();
  });

  $('#cups').click(function(){
    $(".cup").show();
    $(".pon, .kil, .gra, .gal, .qrt, .pnt, .ltr, .m_l, .tryonc, .tblspns").hide();
  });

  $('#quart').click(function(){
    $(".qrt").show();
    $(".pon, .kil, .gra, .gal, .cup, .pnt, .ltr, .m_l, .tryonc, .tblspns").hide();
  });

  $('#pint').click(function(){
    $(".pnt").show();
    $(".pon, .kil, .gra, .gal, .cup, .qrt, .ltr, .m_l, .tryonc, .tblspns").hide();
  });

  $('#liter').click(function(){
    $(".ltr").show();
    $(".pon, .kil, .gra, .gal, .cup, .qrt, .pnt, .m_l, .tryonc, .tblspns").hide();
  });

  $('#ml').click(function(){
    $(".m_l").show();
    $(".pon, .kil, .gra, .gal, .cup, .qrt, .pnt, .ltr, .tryonc, .tblspns").hide();
  });

  $('#troyounce').click(function(){
    $(".tryonc").show();
    $(".pon, .kil, .gra, .gal, .cup, .qrt, .pnt, .ltr, .m_l, .tblspns").hide();
  });

  $('#tablespoons').click(function(){
    $(".tblspns").show();
    $(".pon, .kil, .gra, .gal, .cup, .qrt, .pnt, .ltr, .m_l, .tryonc").hide();
  });

});
</script>

                    </div>
                </div>
            </div>
        </section>
        <!-- ======= BANNER SECTION ======= -->
        <!-- ======= BREADCRUMB SECTION ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">

                    <h2>Ounce Converter</h2>

                <?php 
                    $one_page = new WP_Query(array(
                        'post_type' => 'page',
                        'order'   => 'DESC',

                )); ?>
                    <ol>
                        <li><?php echo get_the_title(8);?></li>
                        <li>Ounce Converter</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- ======= BREADCRUMB SECTION ======= -->
        <!-- ======= CONTENT SECTION ======= -->
        <section id="content" class="content">
            <?php
                while( $one_page->have_posts() ) : $one_page->the_post(); ?>
                <div class="container-lg <?php post_class(); ?>" id="<?php global $post; echo $post->post_name; ?>" >
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        </section>
        <!-- ======= CONTENT SECTION ======= -->
        <!-- ======= MAIN BODY ======= -->
<?php get_footer(); ?>