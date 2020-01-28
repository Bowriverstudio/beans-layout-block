/**
 * BLOCK: Atomic Blocks Layout
 */

/**
 * Import dependencies.
 */
import Edit from './components/edit';
import LayoutsProvider from './components/layouts-provider';
// import './styles/style.scss';
// import './styles/editor.scss';

/**
 * WordPress dependencies.
 */
const { __ } = wp.i18n;
const { registerBlockType } = wp.blocks;

/**
 * Register the Layout block
 */
registerBlockType( 'beans-blocks-/ab-layouts', {
	title: __( 'AB Layouts', 'beans-blocks-' ),
	description: __( 'Add a pre-defined section or layout to posts and pages.', 'beans-blocks-' ),
	icon: 'layout',
	category: 'common',
	keywords: [
		__( 'layout', 'beans-blocks-' ),
		__( 'column', 'beans-blocks-' ),
		__( 'section', 'beans-blocks-' )
	],

	/* Render the block components. */
	edit: props => {
		return <LayoutsProvider><Edit { ...props } /></LayoutsProvider>;
	},

	/* Save the block markup. */
	save: () => {
		return null;
	}
});

/**
 * Add a AB Layout button to the toolbar.
 */
document.addEventListener( 'DOMContentLoaded', appendImportButton );

/**
 * Build the layout inserter button.
 */
function appendImportButton() {
	let toolbar = document.querySelector( '.edit-post-header-toolbar' );
	if ( ! toolbar ) {
		return;
	}
	let buttonDiv = document.createElement( 'div' );
	let html = '<div class="ab-toolbar-insert-layout">';
	html += `<button id="abLayoutInsertButton" class="components-button components-icon-button" aria-label="${ __( 'Insert Layout', 'beans-blocks-' ) }"><i class="dashicons dashicons-layout ab-toolbar-insert-layout-button"></i> ${ __( 'Layouts', 'beans-blocks-' ) }</button>`;
	html += '</div>';
	buttonDiv.innerHTML = html;
	toolbar.appendChild( buttonDiv );
	document.getElementById( 'abLayoutInsertButton' ).addEventListener( 'click', abInsertLayout );
}

/**
 * Add the AB Layout block on click.
 */
function abInsertLayout() {
	let block = wp.blocks.createBlock( 'beans-blocks-/ab-layouts' );
	wp.data.dispatch( 'core/editor' ).insertBlocks( block );
}
