<form action={{ $action }} method="POST" class="form-add-product tf-section-1" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="wg-box">
        <div class="gap22 cols">
            <fieldset class="name">
                <div class="body-title mb-10">Tên sản phẩm <span class="tf-color-1">*</span></div>
                <input class="mb-10" type="text" placeholder="Nhập tên sản phẩm" name="name" tabindex="0"
                    value="{{ old('name') ?? ($data->name ?? '') }}" aria-required="true" required>
                <div class="text-tiny">Không được nhập tên sản phẩm quá 20 ký tự.</div>
                @if ($errors->first('name'))
                    <div class="error error-be">{{ $errors->first('name') }}</div>
                @endif
            </fieldset>
            <fieldset class="category">
                @php
                    $choose_category = old('category_id') ?? ($data->category_id ?? '');
                @endphp
                <div class="body-title mb-10">Danh mục <span class="tf-color-1">*</span></div>
                <div class="select">
                    <select class="" name="category_id">
                        @foreach ($category as $item)
                            <option {{ $choose_category === $item->id ? 'selected' : '' }} value="{{ $item->id }}">
                                {{ $item->name }}
                            </option>
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
            <textarea class="textarea-tinymce" name="content">{{ old('name') ?? ($data->content ?? '') }}</textarea>
            @if ($errors->first('content'))
                <div class="error error-be">{{ $errors->first('content') }}</div>
            @endif
        </fieldset>
    </div>
    <div class="wg-box gap-0">
        <div class="sample"></div>
        <div class="cols gap10 justify-content-end">
            <button class="tf-button style-1 w-full sample-add" type="button">Thêm mẫu</button>
        </div>
    </div>
    <button class="tf-button w208" type="submit">Lưu sản phẩm</button>
</form>
