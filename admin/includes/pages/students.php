 <?php include __DIR__ . '/../controllers/students.php'; ?>

 <!-- content -->
 <section class="main-content">
     <!-- title -->
     <div class="alert text-primary d-flex justify-content-between align-items-center container">
         <h4 class="main-title">Students</h4>
         <a href="./student_form.php"><i class="fa-solid fa-person-circle-plus fa-2x icon"></i></a>
     </div>

     <!-- searching -->
     <div class="search-bar mb-3 container">
         <div class="field">
             <label for="term" class="form-label">Search student</label>
             <form action="./students_search.php" method="get">
                 <div class="input-group">
                     <input type="text" name="term" id="term" class="form-control form-control-sm" value="">
                     <button class="btn btn-secondary btn-sm" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                 </div>
             </form>
         </div>
     </div>

     <!-- message indicator if record deleted -->
     <?php if ($status) : ?>
         <div class="container">
             <div class="alert alert-warning alert-dismissible fade show" role="alert">
                 Successfully deleted the record.
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>
         </div>
     <?php endif; ?>

     <?php  ?>

     <!-- table records -->
     <div class="table-responsive container-fluid">
         <table class="table align-middle table-sm table-hover">
             <thead>
                 <tr>
                     <th>#ID Number</th>
                     <th>Image</th>
                     <th>First name</th>
                     <th>Middle name</th>
                     <th>Last name</th>
                     <th>Age</th>
                     <th>Date of birth</th>
                     <th>Gender</th>
                     <th>Address</th>
                     <th>Contact</th>
                     <th>Email Address</th>
                     <th>Religion</th>
                     <th>Nationality</th>
                     <th>Course</th>
                     <th>Year</th>
                     <th>Section</th>
                     <th>Passcode</th>
                     <th class="text-center">Action</th>
                 </tr>
             </thead>

             <tbody>
                 <?php foreach ($records as $record) : ?>
                     <tr>
                         <td><?php echo $record['id_number']; ?></td>
                         <td>
                             <div class="avatar">
                                 <img src="<?php echo "../photos/uploaded/{$record['photo']}"; ?>" alt="" class="img-fluid">
                             </div>
                         </td>
                         <td><?php echo $record['first_name']; ?></td>
                         <td><?php echo $record['middle_name']; ?></td>
                         <td><?php echo $record['last_name']; ?></td>
                         <td><?php echo $record['age']; ?></td>
                         <td><?php echo $record['date_of_birth']; ?></td>
                         <td><?php echo $record['gender']; ?></td>
                         <td><?php echo $record['address']; ?></td>
                         <td><?php echo $record['contact_number']; ?></td>
                         <td><?php echo $record['email_address']; ?></td>
                         <td><?php echo $record['religion']; ?></td>
                         <td><?php echo $record['nationality']; ?></td>
                         <td><?php echo $student->academicName($record['course'], 'course_name', 'courses'); ?></td>
                         <td><?php echo $student->academicName($record['year_level'], 'level', 'levels'); ?></td>
                         <td><?php echo $student->academicName($record['section'], 'section_name', 'sections'); ?></td>
                         <td><?php echo $record['pwd']; ?></td>
                         <td>
                             <div class="d-flex justify-content-center align-items-center table-icons">
                                 <a href="./student_form.php?steid=<?php echo $record['id']; ?>" class="d-flex justify-content-center align-items-center text-decoration-none me-1"><i class="fa-solid fa-pencil text-secondary"></i></a>
                                 <a href="?source=<?php echo $source; ?>&stdid=<?php echo $record['id']; ?>" class="d-flex justify-content-center align-items-center text-decoration-none ms-1"><i class="fa-solid fa-trash-can text-danger"></i></a>
                             </div>
                         </td>
                     </tr>
                 <?php endforeach; ?>
             </tbody>
         </table>
     </div>


 </section>