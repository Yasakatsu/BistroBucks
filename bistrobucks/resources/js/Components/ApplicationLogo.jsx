import { Box, Image } from "@chakra-ui/react";
import { Link } from "@inertiajs/react";

export default function ApplicationLogo(props) {
    return (
        <Box>
            <Link href="/sale/dashboard">
                <Box as="a">
                    <Image
                        src="/img/bbIcon.png"
                        alt="icon"
                        boxSize="55px"
                        borderRadius="xl"
                    />
                </Box>
            </Link>
        </Box>
    );
}
