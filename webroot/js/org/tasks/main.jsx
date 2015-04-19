var React = require('react');
var SearchBox = require('./search_box.jsx');

var Tasks = React.createClass({
    render: function() {
        return (
            <div>
                <SearchBox />
            </div>
        );
    }
});

React.render(
    <Tasks />,
    document.getElementById('tasks')
);