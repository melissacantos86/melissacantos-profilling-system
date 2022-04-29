 <?php include __DIR__ . '/../controllers/dashboard.php'; ?>

 <section class="main-content container">
     <!-- title -->
     <h4 class="main-title alert text-primary">Dashboard</h4>

     <div class="row">
         <div class="col-12 mb-3">
             <div class="card shadow-sm">
                 <div class="card-body d-flex justify-content-between align-items-center">
                     <span class="title"><i class="fa-solid fa-circle-check text-success fa-lg"></i> Total students</span>
                     <span class="count fs-1 text-secondary fw-bolder"><?php echo $total_student; ?></span>
                 </div>
             </div>
         </div>

         <div class="col-12 mb-3">
             <div class="card shadow-sm">
                 <div class="card-body d-flex justify-content-between align-items-center">
                     <span class="title"><i class="fa-solid fa-circle-check text-success fa-lg"></i> Courses</span>
                     <span class="count fs-1 text-secondary fw-bolder"><?php echo $total_courses; ?></span>
                 </div>
             </div>
         </div>


         <div class="col-12 mb-3">
             <div class="card shadow-sm">
                 <div class="card-body d-flex justify-content-between align-items-center">
                     <span class="title"><i class="fa-solid fa-circle-check text-success fa-lg"></i> Sections</span>
                     <span class="count fs-1 text-secondary fw-bolder"><?php echo $total_sections; ?></span>
                 </div>
             </div>
         </div>

         <div class="col-12 mb-3">
             <div class="card shadow-sm">
                 <div class="card-body d-flex justify-content-between align-items-center">
                     <span class="title"><i class="fa-solid fa-circle-check text-success fa-lg"></i> Year Level</span>
                     <span class="count fs-1 text-secondary fw-bolder"><?php echo $total_levels; ?></span>
                 </div>
             </div>
         </div>
     </div>
 </section>