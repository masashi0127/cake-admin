var React = require('react');

module.exports = React.createClass({
    render: function() {
        return (
            <div className="search-box">
                <div className="search-box__row">
                    <input type="text" className="search-box__keyword" placeholder="タイトル、内容など"/>
                    <button className="search-box__search-button">検索</button>
                </div>
            </div>
        );
    }
});