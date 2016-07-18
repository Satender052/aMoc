<?php
if(!isset($_SESSION['login_adm_no']));

header("Location:main.php");
?>
<!doctype html>
<html lang="en">
<?php
session_start();
//$_SESSION["rank"]=1;
//$_SESSION["adm"]='u14co010';
?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Book</title>
    <link rel="stylesheet" type="text/css" href="css/book.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

    <script>
        var rank=<?php echo($_SESSION['rank']) ;?>;
        var adm='<?php echo($_SESSION['login_adm_no']); ?>';
	</script>

  </head>
  <body ng-app="func" ng-controller="show">
    <div class="nehru" id="nehru_ground">
        <center><h1>Nehru Bhavan</h1></center>
        <div id="t"></div>
        <table class="nehru_table">
            <tr>
                <td  colspan="4"></td>
                <td class="extra" rowspan="2" colspan="2">BATHROOM</td>
                <td id="NBG25" class="available" onclick="toggleclass(this,id)" >BG-25</td>
                <td id="NBG27" class="available" onclick="toggleclass(this,id)" >BG-27</td>
                <td id="NBG29" class="available" onclick="toggleclass(this,id)" >BG-29</td>
                <td id="NBG31" class="available" onclick="toggleclass(this,id)" >BG-31</td>

                <td class="extra" rowspan="2" colspan="2">MESS</td>

                <td id="NAG31" class="available" onclick="toggleclass(this,id)" >AG-31</td>
                <td id="NAG29" class="available" onclick="toggleclass(this,id)" >AG-29</td>
                <td id="NAG27" class="available" onclick="toggleclass(this,id)" >AG-27</td>
                <td id="NAG25" class="available" onclick="toggleclass(this,id)" >AG-25</td>

                <td class="extra" rowspan="2" colspan="2">BATHROOM</td>
                <td  colspan="4"></td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBG26" class="available" onclick="toggleclass(this,id)" >BG-26</td>
                <td id="NBG28" class="available" onclick="toggleclass(this,id)" >BG-28</td>
                <td id="NBG30" class="available" onclick="toggleclass(this,id)" >BG-30</td>
                <td id="NBG32" class="available" onclick="toggleclass(this,id)" >BG-32</td>



                <td id="NAG32" class="available" onclick="toggleclass(this,id)" >AG-32</td>
                <td id="NAG30" class="available" onclick="toggleclass(this,id)" >AG-30</td>
                <td id="NAG28" class="available" onclick="toggleclass(this,id)" >AG-28</td>
                <td id="NAG26" class="available" onclick="toggleclass(this,id)" >AG-26</td>

                <td  colspan="6"></td>

            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBG23" class="available" onclick="toggleclass(this,id)" >BG-23</td>
                <td id="NBG24" class="available" onclick="toggleclass(this,id)" >BG-24</td>

                <td  colspan="4"></td>
                <td  colspan="2"></td>
                <td  colspan="4"></td>

                <td id="NAG24" class="available" onclick="toggleclass(this,id)" >AG-24</td>
                <td id="NAG23" class="available" onclick="toggleclass(this,id)" >AG-23</td>

                <td  colspan="4"></td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBG21" class="available" onclick="toggleclass(this,id)" >BG-21</td>
                <td id="NBG22" class="available" onclick="toggleclass(this,id)" >BG-22</td>

                <td  colspan="10"></td>

                <td id="NAG22" class="available" onclick="toggleclass(this,id)" >AG-22</td>
                <td id="NAG21" class="available" onclick="toggleclass(this,id)" >AG-21</td>

                <td  colspan="4"></td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBG19" class="available" onclick="toggleclass(this,id)" >BG-19</td>
                <td id="NBG20" class="available" onclick="toggleclass(this,id)" >BG-20</td>

                <td  colspan="10"></td>

                <td id="NAG20" class="available" onclick="toggleclass(this,id)" >AG-20</td>
                <td id="NAG19" class="available" onclick="toggleclass(this,id)" >AG-19</td>

                <td  colspan="4"></td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBG17" class="available" onclick="toggleclass(this,id)" >BG-17</td>
                <td id="NBG18" class="available" onclick="toggleclass(this,id)" >BG-18</td>

                <td  colspan="4"></td>
                <td  colspan="2"><a href="#nehru_ground"><button>GROUND</button></a></td>
                <td  colspan="4"></td>

                <td id="NAG18" class="available" onclick="toggleclass(this,id)" >AG-18</td>
                <td id="NAG17" class="available" onclick="toggleclass(this,id)" >AG-17</td>

                <td  colspan="4"></td>
            </tr>

            <tr>
                <td id="NBG16" class="available" onclick="toggleclass(this,id)" >BG-16</td>
                <td id="NBG14" class="available" onclick="toggleclass(this,id)" >BG-14</td>
                <td id="NBG12" class="available" onclick="toggleclass(this,id)" >BG-12</td>
                <td id="NBG10" class="available" onclick="toggleclass(this,id)" >BG-10</td>

                <td colspan="3"></td>
                <td colspan="2" rowspan="2"><a href="#tagore_a"><button>TAGORE BHAVAN</button></a></td>
                <td> </td>

                <td  colspan="2"><a href="#nehru_first"><button>FIRST</button></a></td>
                <td> </td>

                <td colspan="2" rowspan="2"><a href="#bhabha_first"><button>BHABHA BHAVAN</button></a></td>
                <td colspan="3"></td>

                <td id="NAG10" class="available" onclick="toggleclass(this,id)" >AG-10</td>
                <td id="NAG12" class="available" onclick="toggleclass(this,id)" >AG-12</td>
                <td id="NAG14" class="available" onclick="toggleclass(this,id)" >AG-14</td>
                <td id="NAG16" class="available" onclick="toggleclass(this,id)" >AG-16</td>
            </tr>

            <tr>
                <td id="NBG15" class="available" onclick="toggleclass(this,id)" >BG-15</td>
                <td id="NBG13" class="available" onclick="toggleclass(this,id)" >BG-13</td>
                <td id="NBG11" class="available" onclick="toggleclass(this,id)" >BG-11</td>
                <td id="NBG09" class="available" onclick="toggleclass(this,id)" >BG-09</td>

                <td  colspan="6"></td>
                <td  colspan="2"><a href="#nehru_second"><button>SECOND</button></a></td>
                <td  colspan="6"></td>

                <td id="NAG09" class="available" onclick="toggleclass(this,id)" >AG-09</td>
                <td id="NAG11" class="available" onclick="toggleclass(this,id)" >AG-11</td>
                <td id="NAG13" class="available" onclick="toggleclass(this,id)" >AG-13</td>
                <td id="NAG15" class="available" onclick="toggleclass(this,id)" >AG-15</td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBG07" class="available" onclick="toggleclass(this,id)" >BG-07</td>
                <td id="NBG08" class="available" onclick="toggleclass(this,id)" >BG-08</td>

                <td  colspan="4"></td>
                <td  colspan="2"><button onclick="checkpref()">CHECK PREF</button></td>
                <td  colspan="4"></td>

                <td id="NAG08" class="available" onclick="toggleclass(this,id)" >AG-08</td>
                <td id="NAG07" class="available" onclick="toggleclass(this,id)" >AG-07</td>

                <td  colspan="4"></td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBG05" class="available" onclick="toggleclass(this,id)" >BG-05</td>
                <td id="NBG06" class="available" onclick="toggleclass(this,id)" >BG-06</td>

                <td  colspan="10"></td>

                <td id="NAG06" class="available" onclick="toggleclass(this,id)" >AG-06</td>
                <td id="NAG05" class="available" onclick="toggleclass(this,id)" >AG-05</td>

                <td  colspan="4"></td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBG03" class="available" onclick="toggleclass(this,id)" >BG-03</td>
                <td id="NBG04" class="available" onclick="toggleclass(this,id)" >BG-04</td>

                <td  colspan="10"></td>

                <td id="NAG04" class="available" onclick="toggleclass(this,id)" >AG-04</td>
                <td id="NAG03" class="available" onclick="toggleclass(this,id)" >AG-03</td>

                <td  colspan="4"></td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBG01" class="available" onclick="toggleclass(this,id)" >BG-01</td>
                <td id="NBG02" class="available" onclick="toggleclass(this,id)" >BG-02</td>

                <td  colspan="10"></td>

                <td id="NAG02" class="available" onclick="toggleclass(this,id)" >AG-02</td>
                <td id="NAG01" class="available" onclick="toggleclass(this,id)" >AG-01</td>

                <td  colspan="4"></td>
            </tr>
            <tr>
                <td  colspan="4" rowspan="2" ></td>
                <td class="extra" rowspan="2" colspan="2">BATHROOM</td>
                <td  colspan="10" rowspan="2"></td>
                <td class="extra" rowspan="2" colspan="2">BATHROOM</td>
            </tr>
        </table>
        <footer>
            <center><a href="#nehru_first"><img src="arrow.png"></a></center>
        </footer>
    </div>

    <div class="nehru" id="nehru_first">
        <h1><center>Nehru Bhavan</center></h1>
        <table class="nehru_table">
            <tr>
                <td  colspan="4"></td>
                <td class="extra" rowspan="2" colspan="2">BATHROOM</td>
                <td id="NBF25" class="blocked" onclick="toggleclass(this,id)" >BF-25</td>
                <td id="NBF27" class="blocked" onclick="toggleclass(this,id)" >BF-27</td>
                <td id="NBF29" class="blocked" onclick="toggleclass(this,id)" >BF-29</td>
                <td id="NBF31" class="blocked" onclick="toggleclass(this,id)" >BF-31</td>

                <td class="extra" rowspan="2" colspan="2">MESS</td>

                <td id="NAF31" class="available" onclick="toggleclass(this,id)" >AF-31</td>
                <td id="NAF29" class="available" onclick="toggleclass(this,id)" >AF-29</td>
                <td id="NAF27" class="available" onclick="toggleclass(this,id)" >AF-27</td>
                <td id="NAF25" class="available" onclick="toggleclass(this,id)" >AF-25</td>

                <td class="extra" rowspan="2" colspan="2">BATHROOM</td>
                <td  colspan="4"></td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBF26" class="blocked" onclick="toggleclass(this,id)" >BF-26</td>
                <td id="NBF28" class="blocked" onclick="toggleclass(this,id)" >BF-28</td>
                <td id="NBF30" class="blocked" onclick="toggleclass(this,id)" >BF-30</td>
                <td id="NBF32" class="blocked" onclick="toggleclass(this,id)" >BF-32</td>



                <td id="NAF32" class="available" onclick="toggleclass(this,id)" >AF-32</td>
                <td id="NAF30" class="available" onclick="toggleclass(this,id)" >AF-30</td>
                <td id="NAF28" class="available" onclick="toggleclass(this,id)" >AF-28</td>
                <td id="NAF26" class="available" onclick="toggleclass(this,id)" >AF-26</td>

                <td  colspan="6"></td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBF23" class="blocked" onclick="toggleclass(this,id)" >BF-23</td>
                <td id="NBF24" class="blocked" onclick="toggleclass(this,id)" >BF-24</td>

                <td  colspan="4"></td>
                <td  colspan="2"></td>
                <td  colspan="4"></td>

                <td id="NAF24" class="available" onclick="toggleclass(this,id)" >AF-24</td>
                <td id="NAF23" class="available" onclick="toggleclass(this,id)" >AF-23</td>

                <td  colspan="4"></td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBF21" class="blocked" onclick="toggleclass(this,id)" >BF-21</td>
                <td id="NBF22" class="blocked" onclick="toggleclass(this,id)" >BF-22</td>

                <td  colspan="10"></td>

                <td id="NAF22" class="available" onclick="toggleclass(this,id)" >AF-22</td>
                <td id="NAF21" class="available" onclick="toggleclass(this,id)" >AF-21</td>

                <td  colspan="4"></td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBF19" class="blocked" onclick="toggleclass(this,id)" >BF-19</td>
                <td id="NBF20" class="blocked" onclick="toggleclass(this,id)" >BF-20</td>

                <td  colspan="10"></td>

                <td id="NAF20" class="available" onclick="toggleclass(this,id)" >AF-20</td>
                <td id="NAF19" class="available" onclick="toggleclass(this,id)" >AF-19</td>

                <td  colspan="4"></td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBF17" class="blocked" onclick="toggleclass(this,id)" >BF-17</td>
                <td id="NBF18" class="blocked" onclick="toggleclass(this,id)" >BF-18</td>

                <td  colspan="4"></td>
                <td  colspan="2"><a href="#nehru_ground"><button>GROUND</button></a></td>
                <td  colspan="4"></td>

                <td id="NAF18" class="available" onclick="toggleclass(this,id)" >AF-18</td>
                <td id="NAF17" class="available" onclick="toggleclass(this,id)" >AF-17</td>

                <td  colspan="4"></td>
            </tr>

            <tr>
                <td id="NBF16" class="blocked" onclick="toggleclass(this,id)" >BF-16</td>
                <td id="NBF14" class="blocked" onclick="toggleclass(this,id)" >BF-14</td>
                <td id="NBF12" class="blocked" onclick="toggleclass(this,id)" >BF-12</td>
                <td id="NBF10" class="blocked" onclick="toggleclass(this,id)" >BF-10</td>

                <td colspan="3"></td>
                <td colspan="2" rowspan="2"><a href="#tagore_a"><button>TAGORE BHAVAN</button></a></td>
                <td> </td>

                <td  colspan="2"><a href="#nehru_first"><button>FIRST</button></a></td>
                <td> </td>

                <td colspan="2" rowspan="2"><a href="#bhabha_first"><button>BHABHA BHAVAN</button></a></td>
                <td colspan="3"></td>

                <td id="NAF10" class="available" onclick="toggleclass(this,id)" >AF-10</td>
                <td id="NAF12" class="available" onclick="toggleclass(this,id)" >AF-12</td>
                <td id="NAF14" class="available" onclick="toggleclass(this,id)" >AF-14</td>
                <td id="NAF16" class="available" onclick="toggleclass(this,id)" >AF-16</td>
            </tr>

            <tr>
                <td id="NBF15" class="blocked" onclick="toggleclass(this,id)" >BF-15</td>
                <td id="NBF13" class="blocked" onclick="toggleclass(this,id)" >BF-13</td>
                <td id="NBF11" class="blocked" onclick="toggleclass(this,id)" >BF-11</td>
                <td id="NBF09" class="blocked" onclick="toggleclass(this,id)" >BF-09</td>

                <td  colspan="6"></td>
                <td  colspan="2"><a href="#nehru_second"><button>SECOND</button></a></td>
                <td  colspan="6"></td>

                <td id="NAF09" class="available" onclick="toggleclass(this,id)" >AF-09</td>
                <td id="NAF11" class="available" onclick="toggleclass(this,id)" >AF-11</td>
                <td id="NAF13" class="available" onclick="toggleclass(this,id)" >AF-13</td>
                <td id="NAF15" class="available" onclick="toggleclass(this,id)" >AF-15</td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBF07" class="blocked" onclick="toggleclass(this,id)" >BF-07</td>
                <td id="NBF08" class="blocked" onclick="toggleclass(this,id)" >BF-08</td>

                <td  colspan="4"></td>
                <td  colspan="2"><button onclick="checkpref()">CHECK PREF</button></td>
                <td  colspan="4"></td>

                <td id="NAF08" class="available" onclick="toggleclass(this,id)" >AF-08</td>
                <td id="NAF07" class="available" onclick="toggleclass(this,id)" >AF-07</td>

                <td  colspan="4"></td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBF05" class="blocked" onclick="toggleclass(this,id)" >BF-05</td>
                <td id="NBF06" class="blocked" onclick="toggleclass(this,id)" >BF-06</td>

                <td  colspan="10"></td>

                <td id="NAF06" class="available" onclick="toggleclass(this,id)" >AF-06</td>
                <td id="NAF05" class="available" onclick="toggleclass(this,id)" >AF-05</td>

                <td  colspan="4"></td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBF03" class="blocked" onclick="toggleclass(this,id)" >BF-03</td>
                <td id="NBF04" class="blocked" onclick="toggleclass(this,id)" >BF-04</td>

                <td  colspan="10"></td>

                <td id="NAF04" class="available" onclick="toggleclass(this,id)" >AF-04</td>
                <td id="NAF03" class="available" onclick="toggleclass(this,id)" >AF-03</td>

                <td  colspan="4"></td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBF01" class="blocked" onclick="toggleclass(this,id)" >BF-01</td>
                <td id="NBF02" class="blocked" onclick="toggleclass(this,id)" >BF-02</td>

                <td  colspan="10"></td>

                <td id="NAF02" class="available" onclick="toggleclass(this,id)" >AF-02</td>
                <td id="NAF01" class="available" onclick="toggleclass(this,id)" >AF-01</td>

                <td  colspan="4"></td>
            </tr>
            <tr>
                <td  colspan="4" rowspan="2" ></td>
                <td class="extra" rowspan="2" colspan="2">BATHROOM</td>
                <td  colspan="10" rowspan="2"></td>
                <td class="extra" rowspan="2" colspan="2">BATHROOM</td>
            </tr>
        </table>
        <footer>
            <center><a href="#nehru_second"><img src="arrow.png"></a></center>
        </footer>
    </div>

    <div class="nehru" id="nehru_second">
        <h1><center>Nehru Bhavan</center></h1>
        <table class="nehru_table">
            <tr>
                <td  colspan="4"></td>
                <td class="extra" rowspan="2" colspan="2">BATHROOM</td>
                <td id="NBS25" class="available" onclick="toggleclass(this,id)" >BS-25</td>
                <td id="NBS27" class="available" onclick="toggleclass(this,id)" >BS-27</td>
                <td id="NBS29" class="available" onclick="toggleclass(this,id)" >BS-29</td>
                <td id="NBS31" class="available" onclick="toggleclass(this,id)" >BS-31</td>

                <td class="extra" rowspan="2" colspan="2">MESS</td>

                <td id="NAS31" class="available" onclick="toggleclass(this,id)" >AS-31</td>
                <td id="NAS29" class="available" onclick="toggleclass(this,id)" >AS-29</td>
                <td id="NAS27" class="available" onclick="toggleclass(this,id)" >AS-27</td>
                <td id="NAS25" class="available" onclick="toggleclass(this,id)" >AS-25</td>

                <td class="extra" rowspan="2" colspan="2">BATHROOM</td>
                <td  colspan="4"></td>
            </tr>
            <tr>
                <td  colspan="4"></td>

                <td id="NBS26" class="available" onclick="toggleclass(this,id)" >BS-26</td>
                <td id="NBS28" class="available" onclick="toggleclass(this,id)" >BS-28</td>
                <td id="NBS30" class="available" onclick="toggleclass(this,id)" >BS-30</td>
                <td id="NBS32" class="available" onclick="toggleclass(this,id)" >BS-32</td>



                <td id="NAS32" class="available" onclick="toggleclass(this,id)" >AS-32</td>
                <td id="NAS30" class="available" onclick="toggleclass(this,id)" >AS-30</td>
                <td id="NAS28" class="available" onclick="toggleclass(this,id)" >AS-28</td>
                <td id="NAS26" class="available" onclick="toggleclass(this,id)" >AS-26</td>

                <td  colspan="6"></td>

            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBS23" class="available" onclick="toggleclass(this,id)" >BS-23</td>
                <td id="NBS24" class="available" onclick="toggleclass(this,id)" >BS-24</td>

                <td  colspan="4"></td>
                <td  colspan="2"></td>
                <td  colspan="4"></td>

                <td id="NAS24" class="available" onclick="toggleclass(this,id)" >AS-24</td>
                <td id="NAS23" class="available" onclick="toggleclass(this,id)" >AS-23</td>

                <td  colspan="4"></td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBS21" class="available" onclick="toggleclass(this,id)" >BS-21</td>
                <td id="NBS22" class="available" onclick="toggleclass(this,id)" >BS-22</td>

                <td  colspan="10"></td>

                <td id="NAS22" class="available" onclick="toggleclass(this,id)" >AS-22</td>
                <td id="NAS21" class="available" onclick="toggleclass(this,id)" >AS-21</td>

                <td  colspan="4"></td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBS19" class="available" onclick="toggleclass(this,id)" >BS-19</td>
                <td id="NBS20" class="available" onclick="toggleclass(this,id)" >BS-20</td>

                <td  colspan="10"></td>

                <td id="NAS20" class="available" onclick="toggleclass(this,id)" >AS-20</td>
                <td id="NAS19" class="available" onclick="toggleclass(this,id)" >AS-19</td>

                <td  colspan="4"></td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBS17" class="available" onclick="toggleclass(this,id)" >BS-17</td>
                <td id="NBS18" class="available" onclick="toggleclass(this,id)" >BS-18</td>

                <td  colspan="4"></td>
                <td  colspan="2"><a href="#nehru_ground"><button>GROUND</button></a></td>
                <td  colspan="4"></td>

                <td id="NAS18" class="available" onclick="toggleclass(this,id)" >AS-18</td>
                <td id="NAS17" class="available" onclick="toggleclass(this,id)" >AS-17</td>

                <td  colspan="4"></td>
            </tr>

            <tr>
                <td id="NBS16" class="available" onclick="toggleclass(this,id)" >BS-16</td>
                <td id="NBS14" class="available" onclick="toggleclass(this,id)" >BS-14</td>
                <td id="NBS12" class="available" onclick="toggleclass(this,id)" >BS-12</td>
                <td id="NBS10" class="available" onclick="toggleclass(this,id)" >BS-10</td>

                <td colspan="3"></td>
                <td colspan="2" rowspan="2"><a href="#tagore_a"><button>TAGORE BHAVAN</button></a></td>
                <td> </td>

                <td  colspan="2"><a href="#nehru_first"><button>FIRST</button></a></td>
                <td> </td>

                <td colspan="2" rowspan="2"><a href="#bhabha_first"><button>BHABHA BHAVAN</button></a></td>
                <td colspan="3"></td>

                <td id="NAS10" class="available" onclick="toggleclass(this,id)" >AS-10</td>
                <td id="NAS12" class="available" onclick="toggleclass(this,id)" >AS-12</td>
                <td id="NAS14" class="available" onclick="toggleclass(this,id)" >AS-14</td>
                <td id="NAS16" class="available" onclick="toggleclass(this,id)" >AS-16</td>
            </tr>

            <tr>
                <td id="NBS15" class="available" onclick="toggleclass(this,id)" >BS-15</td>
                <td id="NBS13" class="available" onclick="toggleclass(this,id)" >BS-13</td>
                <td id="NBS11" class="available" onclick="toggleclass(this,id)" >BS-11</td>
                <td id="NBS09" class="available" onclick="toggleclass(this,id)" >BS-09</td>

                <td  colspan="6"></td>
                <td  colspan="2"><a href="#nehru_second"><button>SECOND</button></a></td>
                <td  colspan="6"></td>

                <td id="NAS09" class="available" onclick="toggleclass(this,id)" >AS-09</td>
                <td id="NAS11" class="available" onclick="toggleclass(this,id)" >AS-11</td>
                <td id="NAS13" class="available" onclick="toggleclass(this,id)" >AS-13</td>
                <td id="NAS15" class="available" onclick="toggleclass(this,id)" >AS-15</td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBS07" class="available" onclick="toggleclass(this,id)" >BS-07</td>
                <td id="NBS08" class="available" onclick="toggleclass(this,id)" >BS-08</td>

                <td  colspan="4"></td>
                <td  colspan="2"><button onclick="checkpref()">CHECK PREF</button></td>
                <td  colspan="4"></td>

                <td id="NAS08" class="available" onclick="toggleclass(this,id)" >AS-08</td>
                <td id="NAS07" class="available" onclick="toggleclass(this,id)" >AS-07</td>

                <td  colspan="4"></td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBS05" class="available" onclick="toggleclass(this,id)" >BS-05</td>
                <td id="NBS06" class="available" onclick="toggleclass(this,id)" >BS-06</td>

                <td  colspan="10"></td>

                <td id="NAS06" class="available" onclick="toggleclass(this,id)" >AS-06</td>
                <td id="NAS05" class="available" onclick="toggleclass(this,id)" >AS-05</td>

                <td  colspan="4"></td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBS03" class="available" onclick="toggleclass(this,id)" >BS-03</td>
                <td id="NBS04" class="available" onclick="toggleclass(this,id)" >BS-04</td>

                <td  colspan="10"></td>

                <td id="NAS04" class="available" onclick="toggleclass(this,id)" >AS-04</td>
                <td id="NAS03" class="available" onclick="toggleclass(this,id)" >AS-03</td>

                <td  colspan="4"></td>
            </tr>

            <tr>
                <td  colspan="4"></td>

                <td id="NBS01" class="available" onclick="toggleclass(this,id)" >BS-01</td>
                <td id="NBS02" class="available" onclick="toggleclass(this,id)" >BS-02</td>

                <td  colspan="10"></td>

                <td id="NAS02" class="available" onclick="toggleclass(this,id)" >AS-02</td>
                <td id="NAS01" class="available" onclick="toggleclass(this,id)" >AS-01</td>

                <td  colspan="4"></td>
            </tr>
            <tr>
                <td  colspan="4" rowspan="2" ></td>
                <td class="extra" rowspan="2" colspan="2">BATHROOM</td>
                <td  colspan="10" rowspan="2"></td>
                <td class="extra" rowspan="2" colspan="2">BATHROOM</td>
            </tr>
        </table>
        <footer>
            <center><input type="submit" name="submit" value="SUBMIT" ng-click="send()"/></center>
        </footer>
    </div>

    <div class="tagore" id="tagore_a">
        <center><h1>Tagore Bhavan</h1></center>

        <div class="left button"><a href="#nehru_ground"><button>NEHRU BHAVAN</button></a></div>

        <table class="tagore_table">
            <tr>
                <td class="extra" rowspan="3" colspan="3">BATHROOM</td>

                <td id="TAS17" class="available" onclick="toggleclass(this,id)" >AS-17</td>
                <td id="TAS18" class="available" onclick="toggleclass(this,id)" >AS-18</td>
                <td id="TAS19" class="available" onclick="toggleclass(this,id)" >AS-19</td>
                <td id="TAS20" class="available" onclick="toggleclass(this,id)" >AS-20</td>
                <td id="TAS21" class="available" onclick="toggleclass(this,id)" >AS-21</td>
                <td id="TAS22" class="available" onclick="toggleclass(this,id)" >AS-22</td>
                <td id="TAS23" class="available" onclick="toggleclass(this,id)" >AS-23</td>
                <td id="TAS24" class="available" onclick="toggleclass(this,id)" >AS-24</td>

                <td class="extra" rowspan="3" colspan="3">BATHROOM</td>

            </tr>
            <tr>

                <td id="TAF17" class="available" onclick="toggleclass(this,id)" >AF-17</td>
                <td id="TAF18" class="available" onclick="toggleclass(this,id)" >AF-18</td>
                <td id="TAF19" class="available" onclick="toggleclass(this,id)" >AF-19</td>
                <td id="TAF20" class="available" onclick="toggleclass(this,id)" >AF-20</td>
                <td id="TAF21" class="available" onclick="toggleclass(this,id)" >AF-21</td>
                <td id="TAF22" class="available" onclick="toggleclass(this,id)" >AF-22</td>
                <td id="TAF23" class="available" onclick="toggleclass(this,id)" >AF-23</td>
                <td id="TAF24" class="available" onclick="toggleclass(this,id)" >AF-24</td>

            </tr>
            <tr>

                <td id="TAG17" class="available" onclick="toggleclass(this,id)" >AG-17</td>
                <td id="TAG18" class="available" onclick="toggleclass(this,id)" >AG-18</td>
                <td id="TAG19" class="available" onclick="toggleclass(this,id)" >AG-19</td>
                <td id="TAG20" class="available" onclick="toggleclass(this,id)" >AG-20</td>
                <td id="TAG21" class="available" onclick="toggleclass(this,id)" >AG-21</td>
                <td id="TAG22" class="available" onclick="toggleclass(this,id)" >AG-22</td>
                <td id="TAG23" class="available" onclick="toggleclass(this,id)" >AG-23</td>
                <td id="TAG24" class="available" onclick="toggleclass(this,id)" >AG-24</td>


            </tr>
            <tr>

                <td id="TAS16" class="available" onclick="toggleclass(this,id)" >AS-16</td>
                <td id="TAF16" class="available" onclick="toggleclass(this,id)" >AF-16</td>
                <td id="TAG16" class="available" onclick="toggleclass(this,id)" >AG-16</td>
                <td colspan="8"></td>

                <td id="TAG25" class="available" onclick="toggleclass(this,id)" >AG-25</td>
                <td id="TAF25" class="available" onclick="toggleclass(this,id)" >AF-25</td>
                <td id="TAS25" class="available" onclick="toggleclass(this,id)" >AS-25</td>

            </tr>
            <tr>

                <td id="TAS15" class="available" onclick="toggleclass(this,id)" >AS-15</td>
                <td id="TAF15" class="available" onclick="toggleclass(this,id)" >AF-15</td>
                <td id="TAG15" class="available" onclick="toggleclass(this,id)" >AG-15</td>

                <td colspan="8"></td>

                <td id="TAG26" class="available" onclick="toggleclass(this,id)" >AG-26</td>
                <td id="TAF26" class="available" onclick="toggleclass(this,id)" >AF-26</td>
                <td id="TAS26" class="available" onclick="toggleclass(this,id)" >AS-26</td>

            </tr>
            <tr>

                <td id="TAS14" class="available" onclick="toggleclass(this,id)" >AS-14</td>
                <td id="TAF14" class="available" onclick="toggleclass(this,id)" >AF-14</td>
                <td id="TAG14" class="available" onclick="toggleclass(this,id)" >AG-14</td>

                <td colspan="3"></td>
                <td colspan="2"><a href="#tagore_b"><button>WING-B</button></a></td>
                <td colspan="3"></td>

                <td id="TAG27" class="available" onclick="toggleclass(this,id)" >AG-27</td>
                <td id="TAF27" class="available" onclick="toggleclass(this,id)" >AF-27</td>
                <td id="TAS27" class="available" onclick="toggleclass(this,id)" >AS-27</td>

            </tr>
            <tr>

                <td id="TAS13" class="available" onclick="toggleclass(this,id)" >AS-13</td>
                <td id="TAF13" class="available" onclick="toggleclass(this,id)" >AF-13</td>
                <td id="TAG13" class="available" onclick="toggleclass(this,id)" >AG-13</td>

                <td colspan="8"></td>

                <td id="TAG28" class="available" onclick="toggleclass(this,id)" >AG-28</td>
                <td id="TAF28" class="available" onclick="toggleclass(this,id)" >AF-28</td>
                <td id="TAS28" class="available" onclick="toggleclass(this,id)" >AS-28</td>

            </tr>
            <tr>

                <td id="TAS12" class="available" onclick="toggleclass(this,id)" >AS-12</td>
                <td id="TAF12" class="available" onclick="toggleclass(this,id)" >AF-12</td>
                <td id="TAG12" class="available" onclick="toggleclass(this,id)" >AG-12</td>

                <td colspan="8"></td>

                <td id="TAG29" class="available" onclick="toggleclass(this,id)" >AG-29</td>
                <td id="TAF29" class="available" onclick="toggleclass(this,id)" >AF-29</td>
                <td id="TAS29" class="available" onclick="toggleclass(this,id)" >AS-29</td>

            </tr>
           <tr>

                <td id="TAS11" class="available" onclick="toggleclass(this,id)" >AS-11</td>
                <td id="TAF11" class="available" onclick="toggleclass(this,id)" >AF-11</td>
                <td id="TAG11" class="available" onclick="toggleclass(this,id)" >AG-11</td>

                <td colspan="3"></td>
                <td  colspan="2"><button onclick="checkpref()">CHECK PREF</button></td>
                <td colspan="3"></td>

                <td id="TAG30" class="available" onclick="toggleclass(this,id)" >AG-30</td>
                <td id="TAF30" class="available" onclick="toggleclass(this,id)" >AF-30</td>
                <td id="TAS30" class="available" onclick="toggleclass(this,id)" >AS-30</td>

            </tr>
            <tr>

                <td id="TAS10" class="available" onclick="toggleclass(this,id)" >AS-10</td>
                <td id="TAF10" class="available" onclick="toggleclass(this,id)" >AF-10</td>
                <td id="TAG10" class="available" onclick="toggleclass(this,id)" >AG-10</td>

                <td colspan="8"></td>

                <td id="TAG31" class="available" onclick="toggleclass(this,id)" >AG-31</td>
                <td id="TAF31" class="available" onclick="toggleclass(this,id)" >AF-31</td>
                <td id="TAS31" class="available" onclick="toggleclass(this,id)" >AS-31</td>

            </tr>
            <tr>

                <td id="TAS09" class="available" onclick="toggleclass(this,id)" >AS-09</td>
                <td id="TAF09" class="available" onclick="toggleclass(this,id)" >AF-09</td>
                <td id="TAG09" class="available" onclick="toggleclass(this,id)" >AG-09</td>

                <td colspan="8"></td>

                <td id="TAG32" class="available" onclick="toggleclass(this,id)" >AG-32</td>
                <td id="TAF32" class="available" onclick="toggleclass(this,id)" >AF-32</td>
                <td id="TAS32" class="available" onclick="toggleclass(this,id)" >AS-32</td>

            </tr>

            <tr>

                <td class="extra" rowspan="3" colspan="3">BATHROOM</td>

                <td id="TAG08" class="available" onclick="toggleclass(this,id)" >AG-08</td>
                <td id="TAG07" class="available" onclick="toggleclass(this,id)" >AG-07</td>
                <td id="TAG06" class="available" onclick="toggleclass(this,id)" >AG-06</td>
                <td id="TAG05" class="available" onclick="toggleclass(this,id)" >AG-05</td>
                <td id="TAG04" class="available" onclick="toggleclass(this,id)" >AG-04</td>
                <td id="TAG03" class="available" onclick="toggleclass(this,id)" >AG-03</td>
                <td id="TAG02" class="available" onclick="toggleclass(this,id)" >AG-02</td>
                <td id="TAG01" class="available" onclick="toggleclass(this,id)" >AG-01</td>
                <td class="extra" rowspan="3" colspan="3">BATHROOM</td>

            </tr>

            <tr>

                <td id="TAF08" class="available" onclick="toggleclass(this,id)" >AF-08</td>
                <td id="TAF07" class="available" onclick="toggleclass(this,id)" >AF-07</td>
                <td id="TAF06" class="available" onclick="toggleclass(this,id)" >AF-06</td>
                <td id="TAF05" class="available" onclick="toggleclass(this,id)" >AF-05</td>
                <td id="TAF04" class="available" onclick="toggleclass(this,id)" >AF-04</td>
                <td id="TAF03" class="available" onclick="toggleclass(this,id)" >AF-03</td>
                <td id="TAF02" class="available" onclick="toggleclass(this,id)" >AF-02</td>
                <td id="TAF01" class="available" onclick="toggleclass(this,id)" >AF-01</td>

            </tr>

            <tr>


                <td id="TAS08" class="available" onclick="toggleclass(this,id)" >AS-08</td>
                <td id="TAS07" class="available" onclick="toggleclass(this,id)" >AS-07</td>
                <td id="TAS06" class="available" onclick="toggleclass(this,id)" >AS-06</td>
                <td id="TAS05" class="available" onclick="toggleclass(this,id)" >AS-05</td>
                <td id="TAS04" class="available" onclick="toggleclass(this,id)" >AS-04</td>
                <td id="TAS03" class="available" onclick="toggleclass(this,id)" >AS-03</td>
                <td id="TAS02" class="available" onclick="toggleclass(this,id)" >AS-02</td>
                <td id="TAS01" class="available" onclick="toggleclass(this,id)" >AS-01</td>

            </tr>

        </table>

        <div class="right button"><a href="#bhabha_first"><button>BHABHA BHAVAN</button></a></div>

        <footer <style margin-top="5px"></style>>
            <center><a href="#tagore_b"><img src="arrow.png"></a></center>
        </footer>
    </div>

    <div class="tagore" id="tagore_b">
        <center><h1>Tagore Bhavan</h1></center>
         <div class="left button"><a href="#nehru_ground"><button>NEHRU BHAVAN</button></a></div>

        <table class="tagore_table">
            <tr>

                <td class="extra" rowspan="3" colspan="3">BATHROOM</td>

                <td id="TBS17" class="available" onclick="toggleclass(this,id)" >BS-17</td>
                <td id="TBS18" class="available" onclick="toggleclass(this,id)" >BS-18</td>
                <td id="TBS19" class="available" onclick="toggleclass(this,id)" >BS-19</td>
                <td id="TBS20" class="available" onclick="toggleclass(this,id)" >BS-20</td>
                <td id="TBS21" class="available" onclick="toggleclass(this,id)" >BS-21</td>
                <td id="TBS22" class="available" onclick="toggleclass(this,id)" >BS-22</td>
                <td id="TBS23" class="available" onclick="toggleclass(this,id)" >BS-23</td>
                <td id="TBS24" class="available" onclick="toggleclass(this,id)" >BS-24</td>

                <td class="extra" rowspan="3" colspan="3">BATHROOM</td>

            </tr>
            <tr>

                <td id="TBF17" class="available" onclick="toggleclass(this,id)" >BF-17</td>
                <td id="TBF18" class="available" onclick="toggleclass(this,id)" >BF-18</td>
                <td id="TBF19" class="available" onclick="toggleclass(this,id)" >BF-19</td>
                <td id="TBF20" class="available" onclick="toggleclass(this,id)" >BF-20</td>
                <td id="TBF21" class="available" onclick="toggleclass(this,id)" >BF-21</td>
                <td id="TBF22" class="available" onclick="toggleclass(this,id)" >BF-22</td>
                <td id="TBF23" class="available" onclick="toggleclass(this,id)" >BF-23</td>
                <td id="TBF24" class="available" onclick="toggleclass(this,id)" >BF-24</td>

            </tr>
            <tr>

                <td id="TBG17" class="blocked" onclick="toggleclass(this,id)" >BG-17</td>
                <td id="TBG18" class="blocked" onclick="toggleclass(this,id)" >BG-18</td>
                <td id="TBG19" class="blocked" onclick="toggleclass(this,id)" >BG-19</td>
                <td id="TBG20" class="blocked" onclick="toggleclass(this,id)" >BG-20</td>
                <td id="TBG21" class="blocked" onclick="toggleclass(this,id)" >BG-21</td>
                <td id="TBG22" class="blocked" onclick="toggleclass(this,id)" >BG-22</td>
                <td id="TBG23" class="blocked" onclick="toggleclass(this,id)" >BG-23</td>
                <td id="TBG24" class="blocked" onclick="toggleclass(this,id)" >BG-24</td>


            </tr>
            <tr>

                <td id="TBS16" class="available" onclick="toggleclass(this,id)" >BS-16</td>
                <td id="TBF16" class="available" onclick="toggleclass(this,id)" >BF-16</td>
                <td id="TBG16" class="blocked" onclick="toggleclass(this,id)" >BG-16</td>

                <td colspan="8"></td>

                <td id="TBG25" class="blocked" onclick="toggleclass(this,id)" >BG-25</td>
                <td id="TBF25" class="available" onclick="toggleclass(this,id)" >BF-25</td>
                <td id="TBS25" class="available" onclick="toggleclass(this,id)" >BS-25</td>

            </tr>
            <tr>

                <td id="TBS15" class="available" onclick="toggleclass(this,id)" >BS-15</td>
                <td id="TBF15" class="available" onclick="toggleclass(this,id)" >BF-15</td>
                <td id="TBG15" class="blocked" onclick="toggleclass(this,id)" >BG-15</td>

                <td colspan="8"></td>

                <td id="TBG26" class="blocked" onclick="toggleclass(this,id)" >BG-26</td>
                <td id="TBF26" class="available" onclick="toggleclass(this,id)" >BF-26</td>
                <td id="TBS26" class="available" onclick="toggleclass(this,id)" >BS-26</td>

            </tr>
            <tr>

                <td id="TBS14" class="available" onclick="toggleclass(this,id)" >BS-14</td>
                <td id="TBF14" class="available" onclick="toggleclass(this,id)" >BF-14</td>
                <td id="TBG14" class="blocked" onclick="toggleclass(this,id)" >BG-14</td>

                <td colspan="3"></td>
                <td colspan="2"><a href="#tagore_a"><button>WING-A</button></a></td>
                <td colspan="3"></td>

                <td id="TBG27" class="blocked" onclick="toggleclass(this,id)" >BG-27</td>
                <td id="TBF27" class="available" onclick="toggleclass(this,id)" >BF-27</td>
                <td id="TBS27" class="available" onclick="toggleclass(this,id)" >BS-27</td>

            </tr>
            <tr>

                <td id="TBS13" class="available" onclick="toggleclass(this,id)" >BS-13</td>
                <td id="TBF13" class="available" onclick="toggleclass(this,id)" >BF-13</td>
                <td id="TBG13" class="blocked" onclick="toggleclass(this,id)" >BG-13</td>

                <td colspan="8"></td>

                <td id="TBG28" class="blocked" onclick="toggleclass(this,id)" >BG-28</td>
                <td id="TBF28" class="available" onclick="toggleclass(this,id)" >BF-28</td>
                <td id="TBS28" class="available" onclick="toggleclass(this,id)" >BS-28</td>

            </tr>
            <tr>

                <td id="TBS12" class="available" onclick="toggleclass(this,id)" >BS-12</td>
                <td id="TBF12" class="available" onclick="toggleclass(this,id)" >BF-12</td>
                <td id="TBG12" class="blocked" onclick="toggleclass(this,id)" >BG-12</td>

                <td colspan="8"></td>

                <td id="TBG29" class="blocked" onclick="toggleclass(this,id)" >BG-29</td>
                <td id="TBF29" class="available" onclick="toggleclass(this,id)" >BF-29</td>
                <td id="TBS29" class="available" onclick="toggleclass(this,id)" >BS-29</td>

            </tr>
           <tr>

                <td id="TBS11" class="available" onclick="toggleclass(this,id)" >BS-11</td>
                <td id="TBF11" class="available" onclick="toggleclass(this,id)" >BF-11</td>
                <td id="TBG11" class="blocked" onclick="toggleclass(this,id)" >BG-11</td>

                <td colspan="3"></td>
                <td  colspan="2"><button onclick="checkpref()">CHECK PREF</button></td>
                <td colspan="3"></td>

                <td id="TBG30" class="blocked" onclick="toggleclass(this,id)" >BG-30</td>
                <td id="TBF30" class="available" onclick="toggleclass(this,id)" >BF-30</td>
                <td id="TBS30" class="available" onclick="toggleclass(this,id)" >BS-30</td>

            </tr>
            <tr>

                <td id="TBS10" class="available" onclick="toggleclass(this,id)" >BS-10</td>
                <td id="TBF10" class="available" onclick="toggleclass(this,id)" >BF-10</td>
                <td id="TBG10" class="blocked" onclick="toggleclass(this,id)" >BG-10</td>

                <td colspan="8"></td>

                <td id="TBG31" class="blocked" onclick="toggleclass(this,id)" >BG-31</td>
                <td id="TBF31" class="available" onclick="toggleclass(this,id)" >BF-31</td>
                <td id="TBS31" class="available" onclick="toggleclass(this,id)" >BS-31</td>

            </tr>
            <tr>

                <td id="TBS09" class="available" onclick="toggleclass(this,id)" >BS-09</td>
                <td id="TBF09" class="available" onclick="toggleclass(this,id)" >BF-09</td>
                <td id="TBG09" class="blocked" onclick="toggleclass(this,id)" >BG-09</td>

                <td colspan="8"></td>

                <td id="TBG32" class="blocked" onclick="toggleclass(this,id)" >BG-32</td>
                <td id="TBF32" class="available" onclick="toggleclass(this,id)" >BF-32</td>
                <td id="TBS32" class="available" onclick="toggleclass(this,id)" >BS-32</td>

            </tr>

            <tr>

                <td class="extra" rowspan="3" colspan="3">BATHROOM</td>

                <td id="TBG08" class="blocked" onclick="toggleclass(this,id)" >BG-08</td>
                <td id="TBG07" class="blocked" onclick="toggleclass(this,id)" >BG-07</td>
                <td id="TBG06" class="blocked" onclick="toggleclass(this,id)" >BG-06</td>
                <td id="TBG05" class="blocked" onclick="toggleclass(this,id)" >BG-05</td>
                <td id="TBG04" class="blocked" onclick="toggleclass(this,id)" >BG-04</td>
                <td id="TBG03" class="blocked" onclick="toggleclass(this,id)" >BG-03</td>
                <td id="TBG02" class="blocked" onclick="toggleclass(this,id)" >BG-02</td>
                <td id="TBG01" class="blocked" onclick="toggleclass(this,id)" >BG-01</td>
                <td class="extra" rowspan="3" colspan="3">BATHROOM</td>

            </tr>

            <tr>

                <td id="TBF08" class="available" onclick="toggleclass(this,id)" >BF-08</td>
                <td id="TBF07" class="available" onclick="toggleclass(this,id)" >BF-07</td>
                <td id="TBF06" class="available" onclick="toggleclass(this,id)" >BF-06</td>
                <td id="TBF05" class="available" onclick="toggleclass(this,id)" >BF-05</td>
                <td id="TBF04" class="available" onclick="toggleclass(this,id)" >BF-04</td>
                <td id="TBF03" class="available" onclick="toggleclass(this,id)" >BF-03</td>
                <td id="TBF02" class="available" onclick="toggleclass(this,id)" >BF-02</td>
                <td id="TBF01" class="available" onclick="toggleclass(this,id)" >BF-01</td>

            </tr>

            <tr>


                <td id="TBS08" class="available" onclick="toggleclass(this,id)" >BS-08</td>
                <td id="TBS07" class="available" onclick="toggleclass(this,id)" >BS-07</td>
                <td id="TBS06" class="available" onclick="toggleclass(this,id)" >BS-06</td>
                <td id="TBS05" class="available" onclick="toggleclass(this,id)" >BS-05</td>
                <td id="TBS04" class="available" onclick="toggleclass(this,id)" >BS-04</td>
                <td id="TBS03" class="available" onclick="toggleclass(this,id)" >BS-03</td>
                <td id="TBS02" class="available" onclick="toggleclass(this,id)" >BS-02</td>
                <td id="TBS01" class="available" onclick="toggleclass(this,id)" >BS-01</td>

            </tr>

        </table>

         <div class="right button"><a href="#bhabha_first"><button>BHABHA BHAVAN</button></a></div>

        <footer>
            <center><input type="submit" name="submit" value="SUBMIT" ng-click="send()"/></center>
        </footer>
    </div>

    <div class="bhabha" id="bhabha_first">
        <table class="bhabha_table">
            <tr>

            </tr>

        </table>
    </div>

<script src="js/booking.js"></script>
  </body>
  </html>