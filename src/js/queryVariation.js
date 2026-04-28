// In your editor JS, enqueued for the block editor
wp.blocks.registerBlockVariation( 'core/query', {
    name: 'recent-posts',
    title: 'Recent Posts',
    description: 'Shows posts excluding the current one.',
    attributes: {
        namespace: 'idc-block-theme/recent-posts',
        className: 'is-recent-posts',
        query: {
            perPage: 3,
            postType: 'post',
            inherit: false,
        },
    },
    isActive: [ 'namespace' ],
    scope: [ 'inserter', 'transform' ],
} );
