<?php echo View::factory('app/profile/elements/view/similar')->set('title','Similar companies')->set('link',$similar_link)->set('items',$similar_items)->set('type',2)->set('search_type','companies')->render(); ?>