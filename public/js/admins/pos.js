function confirmDelete(id) {
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this item!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            document.getElementById('delete-form-' + id).submit();
            swal("Poof! Your item has been deleted!", {
                icon: "success",
            });
        } else {
            swal("Your item is safe!");
        }
    });
  }