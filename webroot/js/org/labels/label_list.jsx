var React = require('react');

module.exports = React.createClass({
    render: function() {
        var rows = [];

        for (var i = 0; i < 10; i++) {
            rows.push( 
                <li className="label-list__row" key={i}>
                    <ul className="label-list__sub-row">
                        <li className="label-list__item-name"><a href="" className="label-list__label-text">テスト{i}</a></li>
                        <li className="label-list__item-number"><a href="" className="label-list__item-text">利用回数{i}</a></li>
                    </ul>
                </li>
            );
        }

        return (
            <ul className="label-list">{rows}</ul>
        );
    }
});