<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'The :attribute phải được chấp nhận.',
    'active_url'           => 'The :attribute không phải là một URL hợp lệ.',
    'after'                => 'The :attribute phải là một ngày sau :date.',
    'after_or_equal'       => 'The :attribute phải là một ngày sau hoặc bằng :date.',
    'alpha'                => 'The :attribute chỉ có thể chứa các chữ cái. ',
    'alpha_dash'           => 'The :attribute chỉ có thể chứa các chữ cái, số, dấu gạch ngang và dấu gạch dưới. ',
    'alpha_num'            => 'The :attribute chỉ có thể chứa các chữ cái và số. ',
    'array'                => 'The :attribute phải là một mảng. ',
    'before'               => 'The :attribute phải là một ngày trước :date.',
    'before_or_equal'      => 'The :attribute phải là một ngày trước hoặc bằng :date.',
    'between'              => [
        'numeric' => 'The :attribute phải ở giữa :min and :max.',
        'file'    => 'The :attribute phải ở giữa :min and :max kilobytes.',
        'string'  => 'The :attribute phải ở giữa :min and :max characters.',
        'array'   => 'The :attribute phải có giữa :min and :max items.',
    ],
    'boolean'              => 'The :attribute trường phải đúng hoặc sai. ',
    'confirmed'            => 'The :attribute nhận đinh không phù hợp.',
    'date'                 => 'The :attribute Không phải là ngày hợp lệ.',
    'date_equals'          => 'The :attribute phải là một ngày bằng :date.',
    'date_format'          => 'The :attribute không phù hợp với định dạng :format.',
    'different'            => 'The :attribute và :other phải khác biệt. ',
    'digits'               => 'The :attribute cần phải :digits chữ số. ',
    'digits_between'       => 'The :attribute phải ở giữa :min và :max chữ số. ',
    'dimensions'           => 'The :attribute có kích thước hình ảnh không hợp lệ. ',
    'distinct'             => 'The :attribute trường có giá trị trùng lặp. ',
    'email'                => 'The :attribute phải là một địa chỉ email hợp lệ.',
    'exists'               => 'The selected :attribute không có hiệu lực.',
    'file'                 => 'The :attribute phải là một tập tin. ',
    'filled'               => 'The :attribute trường phải có giá trị. ',
    'gt'                   => [
        'numeric' => 'The :attribute phải lớn hơn :value.',
        'file'    => 'The :attribute phải lớn hơn :value kilobytes.',
        'string'  => 'The :attribute phải lớn hơn :value characters.',
        'array'   => 'The :attribute phải có nhiều hơn :value items.',
    ],
    'gte'                  => [
        'numeric' => 'The :attribute phải lớn hơn hoặc bằng :value.',
        'file'    => 'The :attribute phải lớn hơn hoặc bằng :value kilobytes.',
        'string'  => 'The :attribute phải lớn hơn hoặc bằng :value characters.',
        'array'   => 'The :attribute phải có :value các mặt hàng trở lên.',
    ],
    'image'                => 'The :attribute phải là một hình ảnh.',
    'in'                   => 'The selected :attribute không có hiệu lực.',
    'in_array'             => 'The :attribute lĩnh vực không tồn tại trong :other.',
    'integer'              => 'The :attribute phải là số nguyên.',
    'ip'                   => 'The :attribute phải là một địa chỉ IP hợp lệ.',
    'ipv4'                 => 'The :attribute phải là một địa chỉ IPv4 hợp lệ.',
    'ipv6'                 => 'The :attribute phải là một địa chỉ IPv6 hợp lệ.',
    'json'                 => 'The :attribute phải là một chuỗi JSON hợp lệ.',
    'lt'                   => [
        'numeric' => 'The :attribute phải nhỏ hơn :value.',
        'file'    => 'The :attribute phải nhỏ hơn :value kilobytes.',
        'string'  => 'The :attribute phải nhỏ hơn :value characters.',
        'array'   => 'The :attribute phải có ít hơn :value items.',
    ],
    'lte'                  => [
        'numeric' => 'The :attribute phải nhỏ hơn hoặc bằng :value.',
        'file'    => 'The :attribute phải nhỏ hơn hoặc bằng :value kilobytes.',
        'string'  => 'The :attribute phải nhỏ hơn hoặc bằng :value characters.',
        'array'   => 'The :attribute không được có nhiều hơn :value items.',
    ],
    'max'                  => [
        'numeric' => 'The :attribute có thể không lớn hơn :max.',
        'file'    => 'The :attribute có thể không lớn hơn :max kilobytes.',
        'string'  => 'The :attribute có thể không lớn hơn :max characters.',
        'array'   => 'The :attribute có thể không có nhiều hơn :max items.',
    ],
    'mimes'                => 'The :attribute phải là một tập tin của kiểu: :values.',
    'mimetypes'            => 'The :attribute phải là một tập tin của kiểu: :values.',
    'min'                  => [
        'numeric' => 'The :attribute ít nhất phải :min.',
        'file'    => 'The :attribute ít nhất phải :min kilobytes.',
        'string'  => 'The :attribute ít nhất phải :min characters.',
        'array'   => 'The :attribute phải có ít nhất :min items.',
    ],
    'not_in'               => 'The selected :attribute không có hiệu lực.',
    'not_regex'            => 'The :attribute định dạng không hợp lệ.',
    'numeric'              => 'The :attribute phải là một số.',
    'present'              => 'The :attribute lĩnh vực phải có mặt.',
    'regex'                => 'The :attribute định dạng không hợp lệ.',
    'required'             => 'The :attribute lĩnh vực được yêu cầu.',
    'required_if'          => 'The :attribute lĩnh vực được yêu cầu khi :other is :value.',
    'required_unless'      => 'The :attribute trường là bắt buộc trừ khi :other is in :values.',
    'required_with'        => 'The :attribute lĩnh vực được yêu cầu khi :values is present.',
    'required_with_all'    => 'The :attribute lĩnh vực được yêu cầu khi :values are present.',
    'required_without'     => 'The :attribute lĩnh vực được yêu cầu khi :values is not present.',
    'required_without_all' => 'The :attribute trường là bắt buộc khi không có :values are present.',
    'same'                 => 'The :attribute và :other phải phù hợp với.',
    'size'                 => [
        'numeric' => 'The :attribute cần phải :size.',
        'file'    => 'The :attribute cần phải :size kilobytes.',
        'string'  => 'The :attribute cần phải :size characters.',
        'array'   => 'The :attribute phải chứa :size items.',
    ],
    'starts_with'          => 'The :attribute phải bắt đầu với một trong những điều sau đây: :values',
    'string'               => 'The :attribute phải là một chuỗi.',
    'timezone'             => 'The :attribute phải là một khu vực hợp lệ.',
    'unique'               => 'The :attribute đã được thực hiện.',
    'uploaded'             => 'The :attribute không tải lên được.',
    'url'                  => 'The :attribute định dạng không hợp lệ.',
    'uuid'                 => 'The :attribute phải là một UUID hợp lệ.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],
];
