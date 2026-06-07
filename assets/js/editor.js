(() => {
  // src/js/queryVariation.js
  wp.blocks.registerBlockVariation("core/query", {
    name: "recent-posts",
    title: "Recent Posts",
    description: "Shows posts excluding the current one.",
    attributes: {
      namespace: "idc-block-theme/recent-posts",
      className: "is-recent-posts",
      query: {
        perPage: 3,
        postType: "post",
        inherit: false
      }
    },
    isActive: ["namespace"],
    scope: ["inserter", "transform"]
  });

  // src/js/languageToggle.js
  var { registerBlockType } = wp.blocks;
  var { createElement } = wp.element;
  var ServerSideRender = wp.serverSideRender;
  registerBlockType("idc/language-toggle", {
    title: "Language Toggle",
    category: "theme",
    icon: "translation",
    description: "Links to the current page in the opposite language (WPML).",
    supports: {
      html: false,
      reusable: false
    },
    edit: () => createElement(ServerSideRender, {
      block: "idc/language-toggle",
      EmptyResponsePlaceholder: () => createElement(
        "div",
        { style: { padding: "0.5rem", opacity: 0.6 } },
        "Language Toggle (no translation available for this page)"
      )
    }),
    save: () => null
  });
})();
