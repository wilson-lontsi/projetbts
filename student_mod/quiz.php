<?php include '../assets/includes/header.php'; ?>
			<?php $cid = $_GET['cid']; ?>
			<!-- DIRECTORY -->
			<div class="main-dir back-color-white">
				<h1>Class <?php $el->getClassName($cid); ?></h1>
				<p>Teacher <?php $el->getClassFaculty($cid); ?></p>
			</div>
			<div class="inside-class">
				<ul>
				  <li><a href="class.php?cid=<?php echo $cid; ?>">Announcements</a></li>
				  <li><a href="assignments.php?cid=<?php echo $cid; ?>">Assignments</a></li>
				  <li><a class="sactive" href="quiz.php?cid=<?php echo $cid; ?>">Quiz</a></li>
				  <li><a href="grade.php?cid=<?php echo $cid; ?>">Grades</a></li>
				  <li><a href="students.php?id=<?php echo $cid; ?>">Students</a></li>
				</ul>
			</div>
			<!-- END DIRECTORY -->
			
			<!-- CONTAINER -->
			<div class="main-container">
				<div class="inner-container">
					<div class="content-row">
						<div class="panel back-color-white">
							<div class="panel-header-norm">
								<h2>Quiz</h2>
							</div>
							<div class="panel-content-norm">
								<table class="action-table" id="classTable">
									<tr>
										<th>Quizes</th>
                                        <th> </th>
                                        <th>Action</th>
									</tr>
									<?php $el->getStudentQuizes($cid, $user); ?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END CONTAINER -->
<?php include '../assets/includes/footer.php'; ?>