<script>
    $(document).ready(function() {
        const SAMPLE = {!! isset($sample) ? 'JSON.parse(' . json_encode($sample->toJson()) . ')' : 'null' !!};

        function getImage() {
            const image = $(".sample-image input.image")
            image.each(function() {
                if ($(this)) {
                    const sampleImage = $(this).closest(".sample-image")
                    $(this).on('change', function() {
                        const [file] = this.files
                        if (file) {
                            const pathImage = sampleImage.find(".path-image")
                            pathImage.attr('src', URL.createObjectURL(file))
                        }
                    })
                }
            });
        }

        function getSampleDefault() {
            return `
                <div class="gap22 cols mb-16 sample-item">
                    <fieldset>
                        <fieldset class="samples-name">
                            <div class="body-title mb-10">Mẫu</div>
                            <input class="mb-10" type="text" placeholder="Nhập mã mẫu" name="samples_name[]" tabindex="0"
                                value="" aria-required="true" required>
                        </fieldset>
                        <fieldset class="samples-price">
                            <div class="body-title mb-10">Giá</div>
                            <input class="mb-10 price" type="text" placeholder="Nhập giá" name="samples_price[]" tabindex="0"
                                value="" aria-required="true" required>
                        </fieldset>
                        <button type="button" class="btn btn-dark sample-remove rounded-3">Xoá mẫu</button>
                    </fieldset>
                    <fieldset class="sample-image">
                        <div class="upload-image flex-grow">
                            <div class="item up-load">
                                <label class="uploadfile" for="image">
                                    <span class="icon">
                                        <i class="icon-upload-cloud"></i>
                                    </span>
                                    <span class="body-text">Thả ảnh của bạn ở đây hoặc chọn <span class="tf-color">nhấp để
                                            duyệt</span></span>
                                    <input value="" type="file" class="image" name="image[]">
                                </label>
                                <img src=""
                                    class="absolute path-custom path-image" onerror="this.onerror=null;">
                            </div>
                        </div>
                    </fieldset>
                </div>
            `
        }

        function setDisabled() {
            const sampleItem = $(".sample-item")
            if (sampleItem.length === 1) {
                $(".sample-remove").addClass('d-none');
            } else {
                $(".sample-remove").removeClass('d-none');
            }
        }

        function setInputFile() {
            const pathImage = $('.sample-image .path-image');
            pathImage.each(function() {
                if ($(this)) {
                    const sampleImage = $(this).closest(".sample-image")
                    const src = $(this).attr('src');
                    console.log(src)
                    if (src) {
                        $.ajax({
                            url: src,
                            method: 'GET',
                            xhrFields: {
                                responseType: 'blob'
                            },
                            success: function(blob) {
                                const fileName = src.split('/').pop();
                                const file = new File([blob], fileName, {
                                    type: blob.type
                                });
                                const dataTransfer = new DataTransfer();
                                dataTransfer.items.add(file);
                                sampleImage.find('input.image')[0].files = dataTransfer.files;
                            },
                            error: function() {
                                console.error('Error fetching the file');
                            }
                        });
                    }
                }
            })
        }

        function setSampleDefault() {
            $(".sample").empty();
            let html = ``;
            if (SAMPLE) {
                $.each(SAMPLE, function(id, item) {
                    let path = item.image ? "{{ asset('storage') }}/" + item.image : '';
                    html += `
                        <div class="gap22 cols mb-16 sample-item">
                            <fieldset>
                                <fieldset class="samples-name">
                                    <div class="body-title mb-10">Mẫu</div>
                                    <input class="mb-10" type="text" placeholder="Nhập mã mẫu" name="samples_name[]" tabindex="0"
                                        value="${item.name}" aria-required="true" required>
                                </fieldset>
                                <fieldset class="samples-price">
                                    <div class="body-title mb-10">Giá</div>
                                    <input class="mb-10 price" type="text" placeholder="Nhập giá" name="samples_price[]" tabindex="0"
                                        value="${item.price}" aria-required="true" required>
                                </fieldset>
                                <button type="button" class="btn btn-dark sample-remove rounded-3">Xoá mẫu</button>
                            </fieldset>
                            <fieldset class="sample-image">
                                <div class="upload-image flex-grow">
                                    <div class="item up-load">
                                        <label class="uploadfile" for="image">
                                            <span class="icon">
                                                <i class="icon-upload-cloud"></i>
                                            </span>
                                            <span class="body-text">Thả ảnh của bạn ở đây hoặc chọn <span class="tf-color">nhấp để
                                                    duyệt</span></span>
                                            <input type="file" class="image" name="image[]">
                                        </label>
                                        <img src="${path}"
                                            class="absolute path-custom path-image" onerror="this.onerror=null;">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    `
                })
            } else {
                html = getSampleDefault()
            }
            $(".sample").html(html)
            getImage()
            setDisabled()
            setInputFile()
        }
        setSampleDefault()

        $(document).on('click', '.sample-add', function() {
            $(".sample").append(getSampleDefault())
            getImage()
            setDisabled()
        })

        $(document).on('click', '.sample-remove', function() {
            $(this).closest(".sample-item").remove()
            getImage()
            setDisabled()
        })

        $('.deleteDialog').on('click', function() {
            let data_id = $(this).data('id');
            let data_model = 'product';
            destroy(data_id, data_model, "{{ route('ajax.destroy') }}");
        });
    })
</script>
