<?php
/**
 * Example Usage
 *
 * @author    Amana Estats, Inc.
 * @copyright All rights reserved
 * @link      http://www.SalahHour.com
 * @using     Codeigniter 3.1.2
 */

/**
 * Example Usage
 *
 * @author    Amana Estats, Inc.
 * @copyright All rights reserved
 * @link      http://www.SalahHour.com
 * @extends   MY_Controller
 */

/**
 * Example Usage With Design
 *
 * @author    IqbalMind (Muhamad Iqbal Nurmanditya)
 * @copyright All rights reserved
 * @link      https://iqbalmind.net/masjidvers
 * @using     JQuery
 */

// Require core file
define('DS', DIRECTORY_SEPARATOR);
require dirname(__FILE__) . DS . 'core' . DS . 'Prayer_Times.php';

/**
 * Create our location settings
 */
// By specifing a country, it will automatically detect method/madhab
$settings = new Settings('ID');
$settings->location     = array('Bandung', 'West Java', 'ID');
$settings->latitude     = -6.898319;
$settings->longitude    = 107.619542;
$settings->timezone     = 'Asia/Jakarta';

// Get times for next 7 days
$today      = date('Y-m-d');
$tommorrow  = date('Y-m-d', strtotime('+1 days'));
$next_week  = date('Y-m-d', strtotime('+7 days'));
$begin      = new DateTime($today);
$end        = new DateTime($tommorrow);
$interval   = new DateInterval('P1D');
$daterange  = new DatePeriod($begin, $interval, $end);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Masjidvers Display">
    <meta name="description" content="Digital Signage for Mosque">
    <meta name="keywords" content="digital signage, mosque, display">
    <meta name="language" content="English">
    <meta name="author" content="Muhamad Iqbal Nurmanditya">
    <title>Prayer Times Design by IqbalMind</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="panel">
    <div class="panel-isi">
        <?php echo 'Waktu untuk ' . implode(', ', $settings->location) . PHP_EOL; ?>
        <div class="separator"><svg viewBox="0 0 194 8" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Mobile" transform="translate(-63.000000, -125.000000)"><g id="Group-17" transform="translate(63.000000, 125.000000)"><path d="M68.8454132,3.8902439 C68.9099406,3.77790644 69.1461689,3.46212102 69.997678,2.76540488 C71.1227512,1.84501463 72.6566049,1.74277073 77.0540683,2.35623415 C78.5887024,2.57047805 80.2610927,2.81789268 81.8093854,2.86764878 C83.8062634,2.9318439 85.6538732,2.95896585 87.6384585,2.76540488 C89.709678,2.56325854 91.8130927,2.29886829 93.7744585,1.58940488 C96.0593366,0.762868293 96.6335805,0.0754536585 96.6847024,0.00989268293 L96.6847024,-5.85365854e-05 C96.6847024,-5.85365854e-05 96.6860683,0.00189268293 96.6884098,0.00501463415 L96.6889951,0.00423414634 L96.6889951,0.0056 C96.7401171,0.0713560976 97.314361,0.75857561 99.599239,1.5851122 C101.560605,2.29457561 103.66402,2.55896585 105.735044,2.7611122 C107.719629,2.95467317 109.567434,2.92755122 111.564117,2.8633561 C113.112605,2.8136 114.784995,2.56618537 116.319629,2.35194146 C120.716702,1.73847805 122.250751,1.84072195 123.375629,2.7611122 C124.227632,3.45823214 124.46364,3.77397968 124.528006,3.88614634 L124.55159,3.88614634 C124.55159,3.88614634 124.550038,3.89390592 124.541526,3.91158824 C124.550073,3.92932891 124.551629,3.9371122 124.551629,3.9371122 L124.527966,3.9371122 C124.463597,4.0492726 124.227586,4.36498483 123.37559,5.06195122 C122.250712,5.98253659 120.716663,6.08478049 116.31959,5.47112195 C114.784956,5.25707317 113.112176,5.00946341 111.564078,4.95970732 C109.5672,4.89570732 107.71959,4.86858537 105.735005,5.06195122 C103.66359,5.26429268 101.560371,5.52868293 99.5988098,6.23814634 C97.3139317,7.0644878 96.7398829,7.75190244 96.688761,7.81746341 L96.688761,7.82741463 C96.688761,7.82741463 96.6873951,7.82546341 96.6850537,7.82234146 C96.6850537,7.82253659 96.6844683,7.82331707 96.6844683,7.82331707 L96.6844683,7.8217561 C96.6335415,7.756 96.0591024,7.06878049 93.7742244,6.2422439 C91.8130537,5.53297561 89.7094439,5.26839024 87.6384195,5.0662439 C85.6538341,4.87268293 83.8060293,4.89980488 81.8093463,4.964 C80.2608585,5.0137561 78.5884683,5.26117073 77.0538341,5.47541463 C72.6565659,6.08887805 71.1227122,5.98663415 69.997639,5.0662439 C69.1462776,4.36952776 68.9099734,4.05374234 68.8454003,3.94140488 L68.821678,3.94140488 C68.821678,3.94140488 68.8232365,3.93361243 68.8317969,3.91584956 C68.8232064,3.89805108 68.821639,3.8902439 68.821639,3.8902439 L68.8454132,3.8902439 Z M126.616995,3.82279024 C126.616995,2.59449756 127.612702,1.59859512 128.840995,1.59859512 C130.069483,1.59859512 131.06519,2.59449756 131.06519,3.82279024 C131.06519,5.05108293 130.069483,6.04679024 128.840995,6.04679024 C127.612702,6.04679024 126.616995,5.05108293 126.616995,3.82279024 Z M0.00852002923,4.1782439 C0.0316803346,4.13788752 0.116606103,4.02428764 0.423239024,3.77336585 C0.827921951,3.44243902 1.38011707,3.40556098 2.9625561,3.6262439 C3.51494634,3.70331707 4.11670244,3.7924878 4.67397073,3.81043902 C5.39260488,3.83346341 6.05758049,3.84321951 6.77172683,3.77336585 C7.51689756,3.70078049 8.27397073,3.60556098 8.97972683,3.35014634 C9.80216585,3.05278049 10.0088,2.80536585 10.0271415,2.78195122 L10.0271415,2.7782439 C10.0271415,2.7782439 10.0275317,2.77902439 10.0285073,2.78019512 L10.0287024,2.77980488 L10.0287024,2.78039024 C10.0470439,2.804 10.253678,3.05121951 11.075922,3.34878049 C11.7818732,3.604 12.5387512,3.69921951 13.2841171,3.772 C13.9982634,3.84165854 14.663239,3.83170732 15.381678,3.80887805 C15.9389463,3.79092683 16.5408976,3.7017561 17.0930927,3.62487805 C18.6755317,3.404 19.2275317,3.44068293 19.6324098,3.772 C19.9386162,4.02242519 20.0237318,4.13613345 20.0470317,4.17668293 L20.0556098,4.17668293 C20.0556098,4.17668293 20.0550481,4.17950301 20.051952,4.1859315 C20.0550653,4.19238759 20.0556293,4.19521951 20.0556293,4.19521951 L20.0470139,4.19521951 C20.0237162,4.2357753 19.9386038,4.34951898 19.6323902,4.60009756 C19.2277073,4.93121951 18.6755122,4.96790244 17.0932683,4.74721951 C16.540878,4.67014634 15.939122,4.58097561 15.3818537,4.56321951 C14.6632195,4.54019512 13.9982439,4.53043902 13.2840976,4.60009756 C12.5387317,4.67268293 11.7816585,4.76770732 11.0759024,5.02331707 C10.2536585,5.3204878 10.0470244,5.56809756 10.0284878,5.5915122 L10.0284878,5.59521951 C10.0284878,5.59521951 10.0280976,5.59443902 10.0273171,5.59326829 C10.027122,5.59346341 10.027122,5.59365854 10.027122,5.59365854 L10.027122,5.59307317 C10.0085854,5.56946341 9.80195122,5.32204878 8.97970732,5.02468293 C8.27395122,4.76946341 7.51687805,4.6742439 6.7715122,4.60146341 C6.05736585,4.53180488 5.39239024,4.54156098 4.67395122,4.56458537 C4.11668293,4.58253659 3.51492683,4.67170732 2.96253659,4.74858537 C1.38009756,4.96946341 0.828097561,4.93278049 0.423219512,4.60146341 C0.116520528,4.35063538 0.0316242386,4.23696448 0.00848555615,4.19658537 L1.95121951e-05,4.19658537 C1.95121951e-05,4.19658537 0.000575909625,4.19379746 0.00363408574,4.18744226 C0.000558762501,4.1810496 -3.19744231e-14,4.1782439 -3.19744231e-14,4.1782439 L0.00852002923,4.1782439 Z M193.870205,4.1874422 C193.873272,4.19379744 193.873834,4.19658537 193.873834,4.19658537 L193.865342,4.19658537 C193.842158,4.23696448 193.757185,4.35063538 193.450634,4.60146341 C193.045951,4.93278049 192.493951,4.96946341 190.911317,4.74858537 C190.358927,4.67170732 189.757171,4.58253659 189.200098,4.56458537 C188.481268,4.54156098 187.816488,4.53180488 187.102146,4.60146341 C186.356976,4.6742439 185.600098,4.76946341 184.894146,5.02468293 C184.071902,5.32204878 183.865268,5.56946341 183.846537,5.59307317 L183.846537,5.59365854 L183.846537,5.59326829 C183.845561,5.59443902 183.845366,5.59521951 183.845366,5.59521951 L183.845366,5.5915122 C183.826829,5.56809756 183.620195,5.3204878 182.797951,5.02331707 C182.092,4.76770732 181.335122,4.67268293 180.589756,4.60009756 C179.87561,4.53043902 179.210634,4.54019512 178.492,4.56321951 C177.934732,4.58097561 177.332976,4.67014634 176.780585,4.74721951 C175.198146,4.96790244 174.646341,4.93121951 174.241463,4.60009756 C173.93525,4.34951898 173.850137,4.2357753 173.82684,4.19521951 L173.818224,4.19521951 C173.818224,4.19521951 173.818788,4.19238759 173.821902,4.1859315 C173.818806,4.17950301 173.818244,4.17668293 173.818244,4.17668293 L173.826822,4.17668293 C173.850122,4.13613345 173.935237,4.02242519 174.241444,3.772 C174.646322,3.44068293 175.198127,3.404 176.780761,3.62487805 C177.332956,3.7017561 177.934907,3.79092683 178.49198,3.80887805 C179.210615,3.83170732 179.87559,3.84165854 180.589737,3.772 C181.335102,3.69921951 182.09198,3.604 182.797932,3.34878049 C183.620176,3.05121951 183.82681,2.804 183.845346,2.78039024 L183.845346,2.77980488 L183.845346,2.78019512 C183.846322,2.77902439 183.846712,2.7782439 183.846712,2.7782439 L183.846712,2.78195122 C183.865249,2.80536585 184.071883,3.05278049 184.894127,3.35014634 C185.599883,3.60556098 186.356956,3.70078049 187.102127,3.77336585 C187.816468,3.84321951 188.481249,3.83346341 189.200078,3.81043902 C189.757346,3.7924878 190.358907,3.70331707 190.911493,3.6262439 C192.493932,3.40556098 193.045932,3.44243902 193.450615,3.77336585 C193.7571,4.02428764 193.842102,4.13788752 193.865308,4.1782439 L193.873854,4.1782439 C193.873854,4.1782439 193.873289,4.18104959 193.870205,4.1874422 Z M132.939317,4.35662439 L132.939317,3.89633171 L167.304,3.89633171 L167.304,4.35662439 L132.939317,4.35662439 Z M169.388917,4.17767805 C169.388917,3.3523122 170.058185,2.6830439 170.883551,2.6830439 C171.709112,2.6830439 172.37799,3.3523122 172.37799,4.17767805 C172.37799,5.0030439 171.709112,5.67211707 170.883551,5.67211707 C170.058185,5.67211707 169.388917,5.0030439 169.388917,4.17767805 Z M67.2570537,3.82279024 C67.2570537,5.05108293 66.2611512,6.04679024 65.0328585,6.04679024 C63.8043707,6.04679024 62.8086634,5.05108293 62.8086634,3.82279024 C62.8086634,2.59449756 63.8043707,1.59859512 65.0328585,1.59859512 C66.2611512,1.59859512 67.2570537,2.59449756 67.2570537,3.82279024 Z M26.5699512,4.35662439 L26.5699512,3.89633171 L60.934439,3.89633171 L60.934439,4.35662439 L26.5699512,4.35662439 Z M24.484761,4.17767805 C24.484761,5.0030439 23.8156878,5.67211707 22.990322,5.67211707 C22.1649561,5.67211707 21.4958829,5.0030439 21.4958829,4.17767805 C21.4958829,3.3523122 22.1649561,2.6830439 22.990322,2.6830439 C23.8156878,2.6830439 24.484761,3.3523122 24.484761,4.17767805 Z" id="separator"></path></g></g></g></svg></div>
        <div id="clocks-container"> 
            <h4>
            <div id="jqclock-local" class="jqclock"></div>
            </h4> 
        </div>
        <div class="countdown">
            <div class="cdtitle">Waktu Shalat berikutnya</div>
            <div id="demo" class="cd">
            </div>
            <div class="subtime" id="s1"></div>
                <div class="subtime" id="s2"></div>
                <div class="subtime" id="s3"></div>
        </div>
    </div>
    <div class="panel-jadwal">
    <div class="content">
<?php
// Set Prayer Object
$prayer = new Prayer_Times($settings);
foreach($daterange as $date){
    $times = $prayer->getPrayerTimes($date->getTimeStamp());
    // echo $date->format('D M jS Y') . PHP_EOL;
    echo '<div id="sh" class="box-jadwal"><div class="title-jadwal">Shubuh </div>'.'<div class="waktu-jadwal">'. format_am_pm($times[0]) . PHP_EOL.'</div>'.'<div class="waktu-iqomah">Iqomah '.substr($times[0],0,3).(substr($times[0],3)+10).'</div></div>';
    echo '<div id="dh" class="box-jadwal"><div class="title-jadwal">Dhuha </div>'.'<div class="waktu-jadwal">'. format_am_pm($times[1]) . PHP_EOL.'</div>'.'</div>';
    echo '<div id="dz" class="box-jadwal"><div class="title-jadwal">Dzuhur </div>'.'<div class="waktu-jadwal">'. format_am_pm($times[2]) . PHP_EOL.'</div>'.'<div class="waktu-iqomah">Iqomah '.substr($times[2],0,3).(substr($times[2],3)+10).'</div></div>';
    echo '<div id="as" class="box-jadwal"><div class="title-jadwal">Ashar </div>'.'<div class="waktu-jadwal">'. format_am_pm($times[3]) . PHP_EOL.'</div>'.'<div class="waktu-iqomah">Iqomah '.substr($times[3],0,3).(substr($times[3],3)+10).'</div></div>';
    // echo '<br>Sunet: '      . format_am_pm($times[4]) . PHP_EOL;
    echo '<div id="ma" class="box-jadwal"><div class="title-jadwal">Maghrib </div>'.'<div class="waktu-jadwal">'. format_am_pm($times[5]) . PHP_EOL.'</div>'.'<div class="waktu-iqomah">Iqomah '.substr($times[4],0,3).(substr($times[4],3)+10).'</div></div>';
    echo '<div id="is" class="box-jadwal"><div class="title-jadwal">Isya </div>'.'<div class="waktu-jadwal">'. format_am_pm($times[6]) . PHP_EOL.'</div>'.'<div class="waktu-iqomah">Iqomah '.substr($times[5],0,3).(substr($times[5],3)+10).'</div></div>';
}

function format_am_pm($el) { return str_replace(array('%am%', '%pm%'), array('AM', 'PM'), $el);} // For AM PM Function
?>
    </div>
    </div>
</div>
<!-- Use CDN -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script type="text/javascript" src="//gitcdn.link/repo/Lwangaman/jQuery-Clock-Plugin/master/jqClock.min.js"></script> 
<script type="text/javascript"> 
      $(document).ready(function(){ 
        customtimestamp = parseInt($("#jqclock").data("time"));
        $("#jqclock").clock({"langSet":"id","timestamp":customtimestamp}); 
        $("#jqclock-local").clock({"langSet":"id"}); 
      }); 
</script> 
<script>
    <?php 
    $tnow = date('H:i');
    if($tnow<$times[0]){
        $next = date('M j, Y '.$times[0].':00');
        echo '$(document).ready(function(){ $("#sh").removeClass("box-jadwal"); $("#sh").addClass("box-waktunya");  }); ';
    }elseif($tnow<$times[1]){
        $next = date('M j, Y '.$times[1].':00');
        echo '$(document).ready(function(){ $("#dh").removeClass("box-jadwal"); $("#dh").addClass("box-waktunya");  }); ';
    }elseif($tnow<$times[2]){
        $next = date('M j, Y '.$times[2].':00');
        echo '$(document).ready(function(){ $("#dz").removeClass("box-jadwal"); $("#dz").addClass("box-waktunya");  }); ';
    }elseif($tnow<$times[3]){
        $next = date('M j, Y '.$times[3].':00');
        echo '$(document).ready(function(){ $("#as").removeClass("box-jadwal"); $("#as").addClass("box-waktunya");  }); ';
    }elseif($tnow<$times[4]){
        $next = date('M j, Y '.$times[4].':00');
        echo '$(document).ready(function(){ $("#ma").removeClass("box-jadwal"); $("#ma").addClass("box-waktunya");  }); ';
    }elseif($tnow<$times[5]){
        $next = date('M j, Y '.$times[5].':00');
        echo '$(document).ready(function(){ $("#is").removeClass("box-jadwal"); $("#is").addClass("box-waktunya");  }); ';
    }

    
    substr($times[5],3);
    $tes=substr($times[5],0,3).(substr($times[5],3)+10); //tes penjumlahan
    ?>
    console.log('<?php echo $next; ?>');
</script>
<script>
        // Set the date we're counting down to
        var countDownDate = new Date("<?php echo $next; ?>").getTime();

        // Update the count down every 1 second
        var x = setInterval(function () {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var hours = Math.floor(distance / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("demo").innerHTML = hours + ":"
                + minutes + ":" + seconds;
                document.getElementById("s1").innerHTML = "jam";
                document.getElementById("s2").innerHTML = "menit";
                document.getElementById("s3").innerHTML = "detik";

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "Saatnya Shalat";
                document.getElementById("s1").innerHTML = "";
                document.getElementById("s2").innerHTML = "";
                document.getElementById("s3").innerHTML = "";
            }
        }, 1000);
    </script>
</body>
</html>