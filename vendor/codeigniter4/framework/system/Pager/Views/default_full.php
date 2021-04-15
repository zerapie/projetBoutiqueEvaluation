<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(2);
?>


<nav aria-label="Page navigation example <?= lang('Pager.pageNavigation') ?>">
  	<ul class="pagination pagination-modern pagination-modern-spacing justify-content-center justify-content-lg-start mb-0">
    	
	<!-- debut - Previous -->  	
	<?php if ($pager->hasPrevious()) : ?>
		<li class="page-item"> <!-- retour depard -->
      		<a class="page-link prev" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>" aria-label="Previous"> 
	        	<span><i class="fas fa-fast-backward " aria-label="Previous"></i></span>
	      	</a>
    	</li>
		<li class="page-item"> <!-- retour d'1 avant -->
      		<a class="page-link prev" href="<?= $pager->getPreviousPage() ?>" aria-label="<?= lang('Pager.previous') ?>" aria-label="Previous"> 
	        	<span><i class="fas fa-chevron-left" aria-label="Previous"></i></span>
	      	</a>
    	</li>
	<?php endif ?>
	<!--  fin  - Previous -->  	

	<!-- debut - Pages -->  	
		<?php foreach ($pager->links() as $link) : ?>
			<li class="page-item <?= $link['active'] ? 'active' : '' ?>">
				<a class="page-link" href="<?= $link['uri'] ?>">
					<?= $link['title'] ?>
				</a>	
			</li>
		<?php endforeach ?>
	<!--  fin  - Pages -->  	

	<!-- debut - Previous -->
	<?php if ($pager->hasNext()) : ?>  	
		<li class="page-item"> <!-- retour d'1 arriere -->
	      	<a class="page-link next" href="<?= $pager->getNextPage() ?>" aria-label="<?= lang('Pager.next') ?>" aria-label="Next">
	        	<span><i class="fas fa-chevron-right" aria-label="Next"></i></span>
	      	</a>
	    </li>
		<li class="page-item"> <!-- retour fin -->
	      	<a class="page-link next" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>" aria-label="Next">
	        	<span><i class="fas fa-fast-forward" aria-label="Next"></i></span>
	      	</a>
	    </li>
	<?php endif ?>	
	<!--  fin  - Previous -->  	


  	</ul>
</nav>