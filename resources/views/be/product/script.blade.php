<script>
    $(document).ready(function() {
        const image = document.getElementById('image');
        if (image) {
            image.onchange = evt => {
                const [file] = image.files
                if (file) {
                    pathImage.src = URL.createObjectURL(file)
                }
            };
        }
        const icon = document.getElementById('icon');
        if (icon) {
            icon.onchange = evt => {
                const [file] = icon.files
                if (file) {
                    pathIcon.src = URL.createObjectURL(file)
                }
            };
        }
        $('.deleteDialog').on('click', function() {
            let data_id = $(this).data('id');
            let data_model = 'product';
            destroy(data_id, data_model, "{{ route('ajax.destroy') }}");
        });
    })
</script>
