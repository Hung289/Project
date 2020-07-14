<script>
    $(function() {
        $('.nutxoa').on('click', function() {
            $url = $(this).attr('url');
            Swal.fire({
                title: 'Bạn có chắc không?',
                text: "Bạn sẽ không thể hoàn lại thao tác này!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "POST",
                        url: $url,
                        data: {
                            _method: 'DELETE',
                            _token: '<?php echo csrf_token(); ?>'
                        },
                        success: function(res) {
                            if (res.success) {
                                location.reload();
                            } else {
                                alert(res.error);
                            }
                        }
                    });
                }
            })
        })
    })
</script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
<script>
    $(function() {

        $('.content .nameuser').change(function() {

            var cardN = $('input[data-id="CardName"]').val();
            console.log(cardN);
            $("#DivNameEdit").html(cardN);
        });

        function previewImages() {

            var preview = document.querySelector('#preview');

            if (this.files) {
                [].forEach.call(this.files, readAndPreview);
            }

            function readAndPreview(file) {

                // Make sure `file.name` matches our extensions criteria
                if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                    return alert(file.name + " is not an image");
                } // else...

                var reader = new FileReader();

                reader.addEventListener("load", function() {
                    var image = new Image();
                    image.width = 400;

                    image.title = file.name;
                    image.src = this.result;
                    preview.appendChild(image);
                });

                reader.readAsDataURL(file);

            }

        }

        document.querySelector('#file-input').addEventListener("change", previewImages);
    })
</script>
<script>
    $(function() {
        $('.xemchitiet').click(function() {
            var url = $(this).attr('url');
            $.ajax({
                type: "GET",
                url: url,
                success: function(result) {
                    $("#body-modal").html(result);
                }
            })
        })
    })
</script>
<script>
    $(function() {
        $('.resetPass').hide();
        $('#nutmo').on('click', function() {
            $('#nutmo i').toggleClass('xoay');
            $('.resetPass').slideToggle();
        });
    })
</script>