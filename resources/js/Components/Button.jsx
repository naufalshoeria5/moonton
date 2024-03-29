import PropTypes from "prop-types";
import "../../css/button.css";

Button.propTypes = {
    type: PropTypes.oneOf(["button", "submit", "reset"]),
    className: PropTypes.string,
    variant: PropTypes.oneOf([
        "primary",
        "warning",
        "danger",
        "light-outline",
        "white-outline",
    ]),
    processing: PropTypes.bool,
    children: PropTypes.node,
};

export default function Button({
    type = "submit",
    className = "",
    processing,
    variant = "primary",
    children,
    onClick,
}) {
    return (
        <button
            type={type}
            onClick={onClick}
            className={`rounded-2xl py-[13px] text-center  w-full ${
                processing && "opacity-30"
            } btn-${variant} ${className}`}
            disabled={processing}
        >
            {children}
        </button>
    );
}
