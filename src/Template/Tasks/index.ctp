<div id="tasks" class="outer">
    <div class="content">
        <h1 class="main-title">タスク一覧</h1>
        <div class="search-box">
            <div class="search-box__row">
                <input type="text" class="search-box__keyword" placeholder="タイトル、内容など"/>
                <button class="search-box__search-button">検索</button>
            </div>
            <div class="search-box__row">
                <div class="search-box__tabs">
                    <div class="search-box__tab--active">発生</div>
                    <div class="search-box__tab">解決</div>
                    <div class="search-box__tab">すべて</div>
                </div>
                <div class="search-box__selects">
                    <select class="search-box__select">
                        <option value="">すべて</option>
                        <option value="">未着手</option>
                        <option value="">作業中</option>
                        <option value="">完了</option>
                    </select>
                    <select class="search-box__select">
                        <option value="">全員</option>
                        <option value="">木村</option>
                        <option value="">鈴木</option>
                        <option value="">町田</option>
                    </select>
                </div>
            </div>
        </div>
        <ul class="search-list">
            <?php foreach (range(0, 20) as $i) : ?>
            <li class="search-list__row">
                <a href="#" class="search-list__row-link">
                    <ul class="search-list__items">
                        <li class="search-list__item--col80">
                            タイトル
                            <ul class="search-list__label-list">
                                <li class="search-list__label">ラベル1</li>
                                <li class="search-list__label">ラベル2</li>
                                <li class="search-list__label">ラベル3</li>
                            </ul>
                        </li>
                        <li class="search-list__item--col10 text-center">担当者</li>
                        <li class="search-list__item--col10 text-center">発生</li>
                    </ul>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<!-- 
<div id="tasks"></div>
<?= $this->Html->script('min/'.strtolower($this->viewPath).'/index.js?'.date('YmdHis')); ?>
-->