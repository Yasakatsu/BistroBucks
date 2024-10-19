import "./bootstrap";
import "../css/app.css";

import { createRoot } from "react-dom/client";
import { createInertiaApp } from "@inertiajs/react";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { ChakraProvider } from "@chakra-ui/react";
import { extendTheme } from "@chakra-ui/react";

const appName = import.meta.env.VITE_APP_NAME || "No Name";
const theme = extendTheme({
    colors: {
        navy: {
            800: "#1a365d",
        },
        gray: {
            600: "#718096",
        },
    },
});

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.jsx`,
            import.meta.glob("./Pages/**/*.jsx")
        ),
    setup({ el, App, props }) {
        const root = createRoot(el);

        root.render(
            // chakraUIを使うためにChakraProviderでラップ
            <ChakraProvider theme={theme}>
                <App {...props} />
            </ChakraProvider>
        );
    },
    progress: {
        color: "#4B5563",
    },
});
