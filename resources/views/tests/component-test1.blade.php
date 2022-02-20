<x-tests.app>
    <x-slot name="header">ヘッダー1</x-slot>
コンポーネント1
    <x-tests.card title="タイトル" content="コンテンツ" :message="$message"/>
    <!-- 変数の場合は:をつけて書く -->
</x-tests.app>