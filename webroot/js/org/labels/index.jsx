var React = require('react');
var SearchBox = require('./search_box.jsx');
var LabelList = require('./label_list.jsx');

var Tasks = React.createClass({
    render: function() {
        return (
            <div className="content">
                <SearchBox />
                <LabelList />
            </div>
        );
    }
});

React.render(
    <Tasks />,
    document.getElementById('labels')
);