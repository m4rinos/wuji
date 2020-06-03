module.exports = {
  // purge: [],
  theme: {
    extend: {
			colors: {
				default: "var(--text-default-color)",
				inverse: "var(--text-inverse-color)",
				hover: "var(--text-hover-color)",
				accent: "var(--text-accent-color)",
				"accent-light": "var(--text-accent-light-color)",
				muted: "var(--text-muted-color)",
				"muted-light": "var(--text-muted-light-color)",
				error: "var(--text-error-color)"
			},
			backgroundColor: theme => ({
				page: "var(--page-background-color)",
				header: "var(--header-background-color)",
				card: "var(--card-background-color)",
				article: "var(--article-background-color)",
				button: "var(--button-background-color)",
				menu: "var(--menu-background-color)"
			}),
			fontFamily: {
				sans: [
					"HelveticaNeue-Light",
					"Helvetica Neue Light",
					"Helvetica Neue",
					"Helvetica",
					"Arial",
					"Lucida Grande",
					"sans-serif"
				],
				mono: [
					"Inconsolata",
					"Lucida Console",
					"Courier New",
					"monospace"
				]
			},
		},
  },
  variants: {},
  plugins: [],
}
