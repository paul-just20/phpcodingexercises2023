<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSAS, PAUL JUSTINE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>



    <div class="container-fluid bg-primary">
        <div class="upper p-3  py-4 text-white text-center ">
            <h2>PHP Warm-Up Exercise</h2>
            <h3> Table of Contents</h3>by Paul Justine A. Posas | Web Developer
        </div>



        <div class="row bg-secondary-subtle">
            <div class="col-lg-4 col-md-12 col-sm-12 bg-secondary p-2 text-dark bg-opacity-10 ">
                <div class="table-responsive">
                    <table class="table table-hover table-borderless ">
                        <thead>
                            <tr class="table-dark">
                                <th scope="col"></th>
                                <th scope="col">#</th>
                                <th scope="col">Description</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <strong>Part 1</strong>
                                    <i class="fa-regular fa-circle-check"></i>
                                </td>
                                <td>
                                    01
                                </td>
                                <td class="data-left">
                                    <a href="#">Diamond Pattern (Loops)</a>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa-regular fa-circle-check"></i>
                                </td>
                                <td>
                                    02
                                </td>
                                <td class="data-left">
                                    The "X" Pattern (Loops)
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa-solid fa-circle-check"></i>
                                </td>
                                <td>
                                    03
                                </td>
                                <td class="data-left">
                                    <a href="/tasks/part1_exercise3.php">
                                        Arrowhead Right Pattern (Loops)</a>
                                </td>
                            </tr>
                            <tr class="table-active">
                                <td>
                                    <i class="fa-solid fa-circle-check"></i>
                                </td>
                                <td>
                                    <strong>04</strong>
                                </td>
                                <td class="data-left">
                                    <a href="/tasks/part1_exercise4.php" class="active">
                                        <strong>The Grid Pattern (Loops)</strong> </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Part 2</strong>
                                    <i class="fa-regular fa-circle-check"></i>
                                </td>
                                <td>
                                    01
                                </td>
                                <td class="data-left">
                                    The Random Character on Grid Generator
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa-regular fa-circle-check"></i>
                                </td>
                                <td>
                                    02
                                </td>
                                <td class="data-left">
                                    Manipulation of Multi-Dimensional Array (4x4) Grid
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa-regular fa-circle-check"></i>
                                </td>
                                <td>
                                    03
                                </td>
                                <td class="data-left">
                                    Arrays: Stack of Integers (FIFO)
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa-regular fa-circle-check"></i>
                                </td>
                                <td>
                                    04
                                </td>
                                <td class="data-left">
                                    Arrays: Queue of Integers (FIFO)
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa-regular fa-circle-check"></i>
                                </td>
                                <td>
                                    05
                                </td>
                                <td class="data-left">
                                    Form Grid Random Character Generator (2 Inputs)
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa-regular fa-circle-check"></i>
                                </td>
                                <td>
                                    06
                                </td>
                                <td class="data-left">
                                    Code function Debugging
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-8 px-5">

                <a href="/index.php" class="btn btn-success my-3" role="button"> Back to Home</a>
                <p class="fs-5 fw-semibold">Part I: Exercise 4</p>
                <h1 class="display-6 text-primary">
                    The Grid Pattern (Loops)
                </h1>
                <p class="fs-5">
                    <strong>Description:</strong> Creating a 6x5 Grid Table with multiples according to row count by
                    adding 1.
                </p>
                <p>
                    Problem: Create a continuosly duplicating numbers in a 6x5 Grid
                </p>
                <div class="row p-3 g-5 ">
                    <div class="col-6 mb-5 p-3 bg-warning text-dark bg-opacity-25 rounded-2">
                        <p><strong>Solution:</strong></p>
                        <pre>



// construct rows and columns (grid)

for ($rows = 1; $rows <= 6; $rows++){ 
  echo "\n$rows\t".$rows* ($rows+1); // print the 2nd column
for ($b = $rows*($rows+1); $b <= $rows; $b++){
}
 $prod_Col3 = $b*($rows+1); //multiplies the 3rd column
 $prod_Col4 = $prod_Col3 * ($rows+1); //multiplies the 4th column
echo "\t".$prod_Col3."\t".($prod_Col3*($rows+1))."\t".($prod_Col4*($rows+1));
// print using tabs
}




*/
                            </pre>

                    </div>
                    <div class="col-6  p-3 mb-5 bg-info-subtle rounded-2">
                        <p><strong>Output:</strong></p>
                        <code>
                            <pre class="fs-6 ">
                            <?php
                            // construct rows and columns (grid)
                            for ($rows = 1; $rows <= 6; $rows++) {
                                echo "\n$rows\t" . $rows * ($rows + 1); // print the 2nd column
                                for ($b = $rows * ($rows + 1); $b <= $rows; $b++) {
                                }
                                $prod_Col3 = $b * ($rows + 1); //multiplies the 3rd column
                                $prod_Col4 = $prod_Col3 * ($rows + 1); //multiplies the 4th column
                                echo "\t" . $prod_Col3 . "\t" . ($prod_Col3 * ($rows + 1)) . "\t" . ($prod_Col4 * ($rows + 1));
                                // print using tabs
                            }

                            ?>
                            </pre>
                        </code>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <div class="container-fluid bg-secondary">
        <footer class="footer p-2 text-center text-white">
            <h6>Coded and Developed by Paul Justine A. Posas | All Rights Reserved 2023</h6>
        </footer>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>