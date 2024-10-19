import { Link } from "@inertiajs/react";

export default function ResponsiveNavLink({
    className = "",
    children,
    ...props
}) {
    return <Link {...props}>{children}</Link>;
}
