<div class="col-12 modal" id="newNote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

	<div class="modal-dialog modal-lg modal-styling" role="document">
		<div class="modal-content">
			<div class="modal-header">

				<h4 class="modal-title" id="myModalLabel">Add new note</h4>
				<div class="d-flex justify-content-end">
					<button id="pin-button" type="button" class="btn form-button" data-toggle="button" aria-pressed="false" autocomplete="off" value="0" title="Pin note" name="pin"><i class="fa fa-thumb-tack"></i></button>
					<button id="archive-button" type="button" class="btn form-button" data-toggle="button" aria-pressed="false" autocomplete="off" value="0" title="archive"><i class="fa fa-archive" ></i></button>
				</div>
			</div>
			<div class="modal-body">
				<div class=" form-group">
					<form method="POST" action="{{ route('create') }}">
						<input class="form-control form-styling" type="text" name="title" id="myInput" placeholder="Title">
						<textarea class="form-control form-styling" rows="5" name="task" id="myInput" placeholder="Note"></textarea>
						
						{{ csrf_field()}}
					
				</div>
			</div>
			<div class="modal-footer">
					
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-submit">Save changes</button>
				</form>
			</div>
		</div>
	</div>
</div>