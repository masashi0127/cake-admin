var React = require('react');

module.exports = React.createClass({
    render: function() {
        return (
            <div className="search-box">
                <div className="search-box__row">
                    <input type="text" className="search-box__keyword" placeholder="タイトル、内容など"/>
                    <button className="search-box__search-button">検索</button>
                </div>
                <div className="search-box__row">
                    <div className="search-box__tabs">
                        <div className="search-box__tab--active">発生</div>
                        <div className="search-box__tab">解決</div>
                        <div className="search-box__tab">すべて</div>
                    </div>
                    <div className="search-box__selects">
                        <select className="search-box__select">
                            <option value="">すべて</option>
                            <option value="">未着手</option>
                            <option value="">作業中</option>
                            <option value="">完了</option>
                        </select>
                        <select className="search-box__select">
                            <option value="">全員</option>
                            <option value="">木村</option>
                            <option value="">鈴木</option>
                            <option value="">町田</option>
                        </select>
                    </div>
                </div>
            </div>
        );
    }
});