(function () {
	var isDragging = false;
    var $qcbIcon = jQuery('#draggable');
	initDragAndDrop();
	function initDragAndDrop() {
        $qcbIcon.draggable({
            drag: function () {
                isDragging = true;
            }
        });
	}
})();