<?php


switch($page) {
	case "index":
		echo '<ul>
			<li><a class="active" href="contact.php">Contact</a></li>
			<li><a href = "index.php?page=education">Education</a></li>
			<li><a href = "index.php?page=skills">Skills</a></li>
			<li><a href = "index.php?page=experience">Experience</a></li>
			<li><a href = "index.php?page=results">Results</a></li>
		</ul>';
			break;
	case "contact":
		echo '<ul>
			<li><a class="active" href="contact.php">Contact</a></li>
			<li><a href = "index.php?page=education">Education</a></li>
			<li><a href = "index.php?page=skills">Skills</a></li>
			<li><a href = "index.php?page=experience">Experience</a></li>
			<li><a href = "index.php?page=results">Results</a></li>
		</ul>';
			break;
	case "education":
		echo '<ul>
			<li><a href="index.php?page=contact">Contact</a></li>
			<li><a class="active" href = "education.php">Education</a></li>
			<li><a href = "index.php?page=skills">Skills</a></li>
			<li><a href = "index.php?page=experience">Experience</a></li>
			<li><a href = "index.php?page=results">Results</a></li>
		</ul>';
			break;
	case "experience":
		echo '<ul>
			<li><a href="index.php?page=contact">Contact</a></li>
			<li><a href = "index.php?page=education">Education</a></li>
			<li><a href = "index.php?page=skills">Skills</a></li>
			<li><a class="active" href = "experience.php">Experience</a></li>
			<li><a href = "index.php?page=results">Results</a></li>
		</ul>';
			break;
	case "skills":
		echo '<ul>
			<li><a href="index.php?page=contact">Contact</a></li>
			<li><a href = "index.php?page=education">Education</a></li>
			<li><a class="active" href = "skills.php">Skills</a></li>
			<li><a href = "index.php?page=experience">Experience</a></li>
			<li><a href = "index.php?page=results">Results</a></li>
		</ul>';
			break;
	case "results":
		echo '<ul>
			<li><a href="index.php?page=contact">Contact</a></li>
			<li><a href = "index.php?page=education">Education</a></li>
			<li><a class="active" href = "skills.php">Skills</a></li>
			<li><a href = "index.php?page=experience">Experience</a></li>
			<li><a class="active" href = "index.php?page=results">Results</a></li>
		</ul>';
			break;
	default:
			echo '<ul>
			<li><a class="active" href="contact.php">Contact</a></li>
			<li><a href = "index.php?page=education">Education</a></li>
			<li><a href = "index.php?page=skills">Skills</a></li>
			<li><a href = "index.php?page=experience">Experience</a></li>
			<li><a href = "index.php?page=results">Results</a></li>
		</ul>';
			break;
}
?>