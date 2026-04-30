// Editor-side registration for the server-rendered idc/language-toggle block.
// Frontend rendering is handled by Language_Toggle_Block::render().
const { registerBlockType } = wp.blocks;
const { createElement } = wp.element;
const ServerSideRender = wp.serverSideRender;

registerBlockType( 'idc/language-toggle', {
    title: 'Language Toggle',
    category: 'theme',
    icon: 'translation',
    description: 'Links to the current page in the opposite language (WPML).',
    supports: {
        html: false,
        reusable: false,
    },
    edit: () =>
        createElement( ServerSideRender, {
            block: 'idc/language-toggle',
            EmptyResponsePlaceholder: () =>
                createElement(
                    'div',
                    { style: { padding: '0.5rem', opacity: 0.6 } },
                    'Language Toggle (no translation available for this page)'
                ),
        } ),
    save: () => null,
} );
