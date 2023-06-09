<!DOCTYPE html>
<html>
<head>
  <style>
    /* CSS styles for the timeline */
    body {
       margin: 0;
       padding: 30px 0;
       font-family: 'Roboto', sans-serif;
       background: #F1F2F6;
    }

    h1 {
       text-align: center;
       font-weight: 300;
       color: #777
    }

    h1 span {
       font-weight: 600;
    }

    .timeline-container {
       width: 80%;
       padding: 50px 0;
       margin: 50px auto;
       position: relative;
       overflow: hidden;
    }

    .timeline-container:before { /*This is the line down the middle*/
       content: '';
       position: absolute;
       top: 0;
       left: 50%;
       margin-left: -1px;
       width: 2px;
       height: 100%;
       background: #CCD1D9;
       z-index: 1
    }

    .timeline-block {
       width: calc(50% + 8px);
       display: flex;
       justify-content: space-between;
       clear: both;
    }

    .timeline-block-right {
       float: right;
    }

    .timeline-block-left {
       float: left;
       direction: rtl
    }

    .marker {
       width: 16px;
       height: 16px;
       border-radius: 50%;
       border: 2px solid #F5F7FA;
       background: #4DD0E1;
       margin-top: 10px;
       z-index: 9999
    }

    .timeline-content {
       width: 95%;
       padding: 0 15px;
       color: #666
    }

    .timeline-content h3 {
       margin-top: 5px;
       margin-bottom: 5px;
       font-size: 25px;
       font-weight: 500
    }

    .timeline-content span {
       font-size: 15px;
       color: #a4a4a4;
    }

    .timeline-content p {
       font-size: 14px;
       line-height: 1.5em;
       word-spacing: 1px;
       color: #888;
    }

    @media screen and (max-width: 768px) {
       .timeline-container:before {
          left: 8px;
          width: 2px;
       }

       .timeline-block {
          width: 100%;
          margin-bottom: 30px;
       }

       .timeline-block-right {
          float: none;
       }

       .timeline-block-left {
          float: none;
          direction: ltr;
       }
    }
  </style>
</head>
<body>
<?php
include "functions.php";
setup("SAE23");
echo ' <div class="container mt-3">';
pageheader('NTFExchange');
pagenavbar();

?>
<div class="mt-4 p-5 bg-dark text-warning rounded">
  <div class="timeline-container">
    <div class="timeline-block timeline-block-right">
      <div class="marker"></div>
      <div class="timeline-content">
        <h3 style="color:#ffc107;">2017</h3>
        <p style="color:#ffc107;">Fondation de NTFExchange par un groupe d'entrepreneurs passionnés par le potentiel des NFTs dans le domaine de l'art numérique.</p>
      </div>
    </div>

    <div class="timeline-block timeline-block-left">
      <div class="marker"></div>
      <div class="timeline-content">
        <h3 style="color:#ffc107;">2018</h3>
        <p style="color:#ffc107;">Sous la présidence de John Davis, NTFExchange connaît une croissance significative et devient une plateforme réputée pour l'achat, la vente et l'échange de NFTs. L'entreprise établit des partenariats stratégiques avec des artistes et des collectionneurs influents.</p>
      </div>
    </div>

    <div class="timeline-block timeline-block-right">
      <div class="marker"></div>
      <div class="timeline-content">
        <h3 style="color:#ffc107;">2021</h3>
        <p style="color:#ffc107;">NTFExchange lance sa propre plateforme de création et de vente de NFTs, offrant ainsi une solution complète pour les artistes souhaitant se lancer dans l'univers des NFTs.</p>
      </div>
    </div>

    <div class="timeline-block timeline-block-left">
      <div class="marker"></div>
      <div class="timeline-content">
        <h3 style="color:#ffc107;">2023</h3>
        <p style="color:#ffc107;">NTFExchange franchit le cap des 10 millions de NFTs vendus sur sa plateforme, devenant ainsi l'une des principales références du marché des NFTs.</p>
      </div>
    </div>
  </div>
</div>
<?php
pagefooter();
?>
</body>
</html>
