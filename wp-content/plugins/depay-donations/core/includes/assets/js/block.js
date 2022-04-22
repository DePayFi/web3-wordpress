( function (blocks, editor, components, i18n, element ) {

	const icon = props => React.createElement("svg", Object.assign({
	  xmlns: "http://www.w3.org/2000/svg",
	  width: 20,
	  height: 20,
	  style: {
	    enableBackground: "new 0 0 20 20"
	  },
	  xmlSpace: "preserve"
	}, props), React.createElement("path", {
	  fill: "#1E1E1E",
	  d: "M17.4 13.2h-1.1c-.5.6-1 1.1-1.6 1.5H17v1.7H3v-1.7h2.3c-.6-.4-1.1-.9-1.6-1.5H2.6c-.6 0-1.1.5-1.1 1.1v2.5c0 .6.5 1.1 1.1 1.1h14.8c.6 0 1.1-.5 1.1-1.1v-2.5c0-.6-.5-1.1-1.1-1.1z"
	}), React.createElement("path", {
	  fill: "#1E1E1E",
	  d: "M10 1.9a6.7 6.7 0 1 0 0 13.4 6.7 6.7 0 0 0 0-13.4z"
	}));

	const el = wp.element.createElement
	const registerBlockType = wp.blocks.registerBlockType
	const { Fragment } = wp.element
	const { serverSideRender: ServerSideRender } = wp
	let isInitialized = false

	registerBlockType( 'depay-donations/block', {
	title: 'DePay Donations',
	description: 'Embed the DePay Donations button.',
	icon,
	keywords: [ "depay", "donations", "donation", "button" ],
	category: 'widgets',
	example: {},
	edit: function (props) {
		
		let element = React.createElement(DePayButtons.DePayButton, {
      label: 'Pay',
      widget: 'Payment',
      configuration: {"accept":[{"blockchain":"ethereum","amount":20,"token":"0xa0bEd124a09ac2Bd941b10349d8d224fe3c955eb","receiver":"0x4e260bB2b25EC6F3A59B478fCDe5eD5B8D783B02"}]}
    })
		return element
	},
	save: function (props) {
		return null
	}
})

})(
	window.wp.blocks,
	window.wp.editor,
	window.wp.components,
	window.wp.i18n,
	window.wp.element
)
