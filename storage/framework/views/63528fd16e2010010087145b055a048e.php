<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>masterBarang</title>
     
     <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
     
</head>
<body id="bg-container">
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="container" style="width:100%;">
            <!-- Konten -->
            <div class="row d-flex justify-content-center align-items-center" style="width:100%;">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <h2>Master Barang</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center align-items-center" style="">
                <div class="col-6 d-flex justify-content-center align-items-center">
                    <a class="btn btn-dark " href="<?php echo e(route('home')); ?>" id="btn-welcome" >masuk</a>
                </div>
            </div>
        </div>
    </div>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>
<?php /**PATH C:\Users\JOHANES\Documents\Tugas kuliah\Semester 4\Framework\uts\mini_project_uts\resources\views/welcome.blade.php ENDPATH**/ ?>