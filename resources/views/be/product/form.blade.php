<form action={{ $action }} method="POST" class="form-add-product tf-section-1" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="wg-box">
        <div class="gap22 cols">
            <fieldset class="name">
                <div class="body-title mb-10">Tên sản phẩm <span class="tf-color-1">*</span></div>
                <input class="mb-10" type="text" placeholder="Nhập tên sản phẩm" name="name" tabindex="0"
                    value="" aria-required="true" required>
                <div class="text-tiny">Không được nhập tên sản phẩm quá 20 ký tự.</div>
                @if ($errors->first('name'))
                    <div class="error error-be">{{ $errors->first('name') }}</div>
                @endif
            </fieldset>
            <fieldset class="category">
                <div class="body-title mb-10">Danh mục <span class="tf-color-1">*</span></div>
                <div class="select">
                    <select class="" name="category_id">
                        @foreach ($category as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                @if ($errors->first('category_id'))
                    <div class="error error-be">{{ $errors->first('category_id') }}</div>
                @endif
            </fieldset>
        </div>
        <fieldset class="content">
            <div class="body-title mb-10">Mô tả</div>
            <textarea class="textarea-tinymce" name="content"></textarea>
            @if ($errors->first('content'))
                <div class="error error-be">{{ $errors->first('content') }}</div>
            @endif
        </fieldset>
    </div>
    <div class="wg-box">
        <div class="gap22 cols">
            <fieldset>
                <fieldset class="samples_name">
                    <div class="body-title mb-10">Mẫu</div>
                    <input class="mb-10" type="text" placeholder="Nhập mã mẫu" name="samples_name[]" tabindex="0"
                        value="" aria-required="true" required>
                </fieldset>
                <fieldset class="samples_price">
                    <div class="body-title mb-10">Giá</div>
                    <input class="mb-10 price" type="text" placeholder="Nhập giá" name="samples_price[]" tabindex="0"
                        value="" aria-required="true" required>
                </fieldset>
            </fieldset>
            <fieldset>
                <div class="upload-image mb-16">
                    <div class="item up-load">
                        <label class="uploadfile" for="myFile">
                            <span class="icon">
                                <i class="icon-upload-cloud"></i>
                            </span>
                            <span class="text-tiny">Drop your images here or select <span class="tf-color">click to
                                    browse</span></span>
                            <input type="file" id="myFile" name="filename">
                        </label>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="cols gap10">
            <button class="tf-button w-full" type="submit">Add product</button>
            <button class="tf-button style-1 w-full" type="submit">Save product</button>
            <a href="#" class="tf-button style-2 w-full">Schedule</a>
        </div>
    </div>
</form>
