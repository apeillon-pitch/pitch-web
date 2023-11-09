// @ts-check

/**
 * Build configuration
 *
 * @see {@link https://bud.js.org/guides/configure}
 * @param {import('@roots/bud').Bud} app
 */
export default async (app) => {
  app
    /**
     * Application entrypoints
     */
    .entry({
      app: ["@scripts/app", "@styles/app"],
      menu: ["@scripts/slide-menu"],
      typed: ["@scripts/typed"],
      editor: ["@scripts/editor", "@styles/editor"],
    })

    .provide({
      jquery: ["jQuery", "$"],
    })

    /**
     * Directory contents to be included in the compilation
     */
    .assets(["images"])

    /**
     * Matched files trigger a page reload when modified
     */
    .watch(["resources/views/**/*", "app/**/*"])

    /**
     * Proxy origin (`WP_HOME`)
     */
    .proxy("http://bedrocksage10.local")

    /**
     * Development origin
     */
    .serve("http://bedrocksage10.local:3000")

    /**
     * URI of the `public` directory
     */
    .setPublicPath("/app/themes/pitch-theme-sage-10/public/")

    /**
     * Generate WordPress `theme.json`
     *
     * @note This overwrites `theme.json` on every build.
     */
    .wpjson
      .settings({
        color: {
          custom: false,
          customGradient: false,
          defaultPalette: false,
          defaultGradients: false,
        },
        custom: {
          spacing: {},
          typography: {
            'font-size': {},
            'line-height': {},
          },
        },
        spacing: {
          padding: true,
          units: ['px', '%', 'em', 'rem', 'vw', 'vh'],
        },
        typography: {
          customFontSize: false,
        },
      })
      .enable()
};
