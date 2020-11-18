<?php include_once 'Nav&Foot/indexHead.php' ?>

        <div class="col-sm-12" id="title">
            <h1> <b>MY CODING PROJECTS </b></h1>
            <hr>
            <h6>"THE BEST WAY TO PREDICT THE FUTURE IS TO CREATE IT."</h6>
            <h6>—ABRAHAM LINCOLN</h6>
            <button type="button" class="btn btn-outline-dark check" onclick="window.location.href='#middle';">CHECK IT OUT</button>
        </div>

        <div id="middle">
            <div class="row" id="firstRow">
                <div class="col-sm-7 no-padding">
                    <div class="buttongrp">
                        <button class="btn btn-outline-dark sudoku" onclick="window.location.href='/projects/sudoku.php';"> SUDOKU <br> <br> <br>
                            GENERATING AND ALGORITHMIC SOLVING 
                        </button>
                    </div>
                </div>  
                <div class="col-sm-5 no-padding">
                    <div class="buttongrp">
                        <button class="btn btn-outline-dark sortAl" onclick="window.location.href='/projects/sortingAlgorithm.php';"> SORTING ALGORITHM <br> <br> <br>
                            ALGORITHM USED TO SORT ARRAYS
                        </button>
                    </div>
                </div>
                <div class="col-sm-5 no-padding">
                    <div class="buttongrp">
                        <button class="btn btn-outline-dark pathFi" onclick="window.location.href='/projects/pathFinding.php';"> PATH FINDING <br> <br> <br>
                            FIND POINT A FROM POINT B
                        </button>
                    </div>
                </div>
                <div class="col-sm-7 no-padding">
                    <div class="buttongrp">
                        <button class="btn btn-outline-dark ai" onclick="window.location.href='/projects/ai.php';">ARTIFICAL INTELIGENCE <br> <br> <br>
                            SNAKE GAME PLAYED BY AI
                        </button>
                    </div>
                </div>
            </div>
        </div>

<?php include_once 'Nav&Foot/footer.php';
?>