<?php
namespace App\Http\Validators;

use Illuminate\Validation\Validator;

/**
 * P152〜 オリジナルのバリデータを作成
 * メソッドでバリデーションルールを定義する。
 * 今回は「入力された値が偶数なら許可、奇数なら不許可」のルールを設定
 * 以前作成したHelloServiceProviderに組み込んでいく。
 */
class HelloValidator extends Validator {
    public function validateHello($attribute, $value, $parameter) {
        return $value % 2 == 0;
    }
}